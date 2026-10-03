<?php

namespace App\Http\Controllers;

use App\Models\Gecko;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function storeRequest(Request $request, $geckoId)
    {
        $request->validate([
            'buyer_name'       => 'required|string|max:255',
            'buyer_phone'      => 'required|string|max:20',
            'destination_city' => 'required|string|max:255',
            'shipping_address' => 'required|string',
        ]);

        try {
            $order = DB::transaction(function () use ($request, $geckoId) {
                // Lock baris di DB untuk mencegah double booking
                $gecko = Gecko::where('id', $geckoId)
                    ->lockForUpdate()
                    ->firstOrFail();

                if ($gecko->status !== 'READY STOCK') {
                    throw new \Exception('Maaf, gecko ini sedang dikunci atau sudah dibeli calon adopter lain.');
                }

                // 1. Kunci stok gecko
                $gecko->update(['status' => 'LOCKED']);

                // 2. Buat record Order
                return Order::create([
                    'order_code'       => 'VAL-' . strtoupper(Str::random(6)),
                    'gecko_id'         => $gecko->id,
                    'buyer_name'       => $request->buyer_name,
                    'buyer_phone'      => $request->buyer_phone,
                    'destination_city' => $request->destination_city,
                    'shipping_address' => $request->shipping_address,
                    'gecko_price'      => $gecko->price,
                    'status'           => 'PENDING_QUOTE',
                    'locked_until'     => now()->addHours(24),
                ]);
            });

            // ══════════════════════════════════════════════════════════
            // KIRIM NOTIFIKASI OTOMATIS KE TELEGRAM ADMIN
            // ══════════════════════════════════════════════════════════
            try {
                // Muat relasi gecko agar $order->gecko tidak null
                $order->load('gecko');

                $botToken = config('services.telegram.bot_token');
                $chatId   = config('services.telegram.chat_id');

                if ($botToken && $chatId) {
                    $morphName = $order->gecko ? $order->gecko->morph : 'Gecko';

                    $teleMessage = "🔔 <b>ADA PESANAN ADOPSI BARU!</b>\n\n"
                        . "🦎 <b>Gecko:</b> {$morphName} (#GECKO-{$order->gecko_id})\n"
                        . "🏷️ <b>Harga Gecko:</b> Rp " . number_format($order->gecko_price, 0, ',', '.') . "\n"
                        . "📦 <b>Kode Order:</b> #{$order->order_code}\n\n"
                        . "👤 <b>Pembeli:</b> {$order->buyer_name}\n"
                        . "📞 <b>No WA:</b> {$order->buyer_phone}\n"
                        . "📍 <b>Tujuan:</b> {$order->destination_city}\n"
                        . "🏠 <b>Alamat:</b> {$order->shipping_address}\n\n"
                        . "👉 <i>Segera buka Admin Dashboard untuk set ongkir!</i>";

                    $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                        'chat_id'    => $chatId,
                        'text'       => $teleMessage,
                        'parse_mode' => 'HTML',
                    ]);

                    if (!$response->successful()) {
                        Log::error('Telegram API Failure: ' . $response->body());
                    }
                } else {
                    Log::error('Telegram Token / Chat ID tidak ditemukan di config.');
                }
            } catch (\Exception $e) {
                Log::error('Telegram Bot Error: ' . $e->getMessage());
            }

            return redirect()->back()->with('success', 'Permintaan booking berhasil! Admin akan mengecek ongkir terbaik dan mengontak WhatsApp Anda.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}