<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('gecko')->latest()->paginate(15);
        return view('admin.orders.index', compact('orders'));
    }

    public function setShippingAndGeneratePayment(Request $request, $orderId)
    {
        $request->validate([
            'shipping_cost' => 'required|numeric|min:0',
        ]);

        $order = Order::with('gecko')->findOrFail($orderId);

        // Midtrans Config
        Config::$serverKey    = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production', false);
        Config::$isSanitized  = true;
        Config::$is3ds        = true;

        $shippingCost = $request->shipping_cost;
        $totalPrice   = $order->gecko_price + $shippingCost;

        $params = [
            'transaction_details' => [
                'order_id'     => $order->order_code . '-' . time(),
                'gross_amount' => (int) $totalPrice,
            ],
            'customer_details' => [
                'first_name' => $order->buyer_name,
                'phone'      => $order->buyer_phone,
            ],
            'item_details' => [
                [
                    'id'       => 'GECKO-' . $order->gecko_id,
                    'price'    => (int) $order->gecko_price,
                    'quantity' => 1,
                    'name'     => 'Gecko ' . $order->gecko->morph,
                ],
                [
                    'id'       => 'SHIPPING',
                    'price'    => (int) $shippingCost,
                    'quantity' => 1,
                    'name'     => 'Ongkir & Packing (' . $order->destination_city . ')',
                ]
            ],
        ];

        $snapUrl = Snap::createTransaction($params)->redirect_url;

        $order->update([
            'shipping_cost' => $shippingCost,
            'total_price'   => $totalPrice,
            'payment_url'   => $snapUrl,
            'status'        => 'AWAITING_PAYMENT',
            'locked_until'  => now()->addHours(12),
        ]);

        $phoneFormatted = preg_replace('/[^0-9]/', '', $order->buyer_phone);
        if (str_starts_with($phoneFormatted, '0')) {
            $phoneFormatted = '62' . substr($phoneFormatted, 1);
        }

        $waMessage = urlencode(
            "Halo Kak {$order->buyer_name},\n\n" .
            "Pesanan Gecko *{$order->gecko->morph}* (#{$order->order_code}) sudah kami cek.\n\n" .
            "Rincian Biaya:\n" .
            "- Gecko: Rp " . number_format($order->gecko_price, 0, ',', '.') . "\n" .
            "- Ongkir & Packing ({$order->destination_city}): Rp " . number_format($shippingCost, 0, ',', '.') . "\n" .
            "*Total: Rp " . number_format($totalPrice, 0, ',', '.') . "*\n\n" .
            "Silakan lakukan pembayaran melalui link Midtrans resmi berikut:\n" .
            "{$snapUrl}\n\n" .
            "_Link berlaku 12 jam. Terima kasih!_"
        );

        return redirect()->away("https://wa.me/{$phoneFormatted}?text={$waMessage}");
    }

    public function markAsPaid($id)
{
    $order = Order::with('gecko')->findOrFail($id);
    $order->update(['status' => 'PAID']);

    if ($order->gecko) {
        $order->gecko->update(['status' => 'TERJUAL']);
    }

    return redirect()->back()->with('success', 'Order lunas & status Gecko otomatis TERJUAL!');
}
}