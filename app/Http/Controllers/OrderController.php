<?php

namespace App\Http\Controllers;

use App\Models\Gecko;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

            return redirect()->back()->with('success', 'Permintaan booking berhasil! Admin akan mengecek ongkir terbaik dan mengontak WhatsApp Anda.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}