<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Midtrans\Config;
use Midtrans\Notification;

class MidtransCallbackController extends Controller
{
    public function handle(Request $request)
    {
        Config::$serverKey    = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production', false);

        try {
            $notif = new Notification();
            $transactionStatus = $notif->transaction_status;
            $orderIdWithTimestamp = $notif->order_id; // Contoh: VAL-HNBBDP-1710000

            // Ambil kode order aslinya (misal: VAL-HNBBDP)
            $parts = explode('-', $orderIdWithTimestamp);
            $orderCode = $parts[0] . '-' . $parts[1];

            $order = Order::with('gecko')->where('order_code', $orderCode)->first();

            if (!$order) {
                return response()->json(['message' => 'Order tidak ditemukan'], 404);
            }

            if ($transactionStatus == 'capture' || $transactionStatus == 'settlement') {
                // Pembayaran Berhasil / Lunas
                $order->update(['status' => 'PAID']);
                if ($order->gecko) {
                    $order->gecko->update(['status' => 'TERJUAL']);
                }
            } elseif (in_array($transactionStatus, ['deny', 'expire', 'cancel'])) {
                // Pembayaran Gagal / Kadaluarsa
                $order->update(['status' => 'CANCELLED']);
                if ($order->gecko) {
                    $order->gecko->update(['status' => 'READY STOCK']);
                }
            }

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}