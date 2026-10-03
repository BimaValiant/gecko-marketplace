<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Managed Orders</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-100 p-6 sm:p-10 text-slate-800">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-black text-slate-900">Dashboard Order Adopsi</h1>
                <p class="text-xs text-slate-500 mt-1">Kelola permintaan booking & konfirmasi ongkir pengiriman gecko.</p>
            </div>
            <a href="{{ route('katalog') }}" class="px-4 py-2 rounded-xl bg-white text-xs font-bold shadow-sm border border-slate-200">
                &larr; Ke Katalog
            </a>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200/80 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                        <tr>
                            <th class="p-4">Kode Order</th>
                            <th class="p-4">Gecko</th>
                            <th class="p-4">Pembeli & WA</th>
                            <th class="p-4">Tujuan</th>
                            <th class="p-4">Harga Gecko</th>
                            <th class="p-4">Ongkir</th>
                            <th class="p-4">Status</th>
                            <th class="p-4 text-center">Aksi / Set Ongkir</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-medium">
                        @forelse($orders as $order)
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="p-4 font-extrabold text-slate-900">#{{ $order->order_code }}</td>
                            <td class="p-4">
                                <span class="font-bold text-slate-900 block">{{ $order->gecko->morph }}</span>
                                <span class="text-[10px] text-slate-400">#GECKO-{{ $order->gecko_id }}</span>
                            </td>
                            <td class="p-4">
                                <span class="font-bold block">{{ $order->buyer_name }}</span>
                                <span class="text-slate-500">{{ $order->buyer_phone }}</span>
                            </td>
                            <td class="p-4">
                                <span class="font-bold block text-emerald-700">{{ $order->destination_city }}</span>
                                <span class="text-[10px] text-slate-400 block max-w-[150px] truncate" title="{{ $order->shipping_address }}">{{ $order->shipping_address }}</span>
                            </td>
                            <td class="p-4 font-bold">Rp {{ number_format($order->gecko_price, 0, ',', '.') }}</td>
                            <td class="p-4 font-bold text-emerald-600">
                                {{ $order->shipping_cost > 0 ? 'Rp ' . number_format($order->shipping_cost, 0, ',', '.') : 'Belum Set' }}
                            </td>
                            <td class="p-4">
                                @if($order->status === 'PENDING_QUOTE')
                                    <span class="px-2.5 py-1 rounded-full bg-amber-100 text-amber-800 text-[10px] font-bold">MENUNGGU ONGKIR</span>
                                @elseif($order->status === 'AWAITING_PAYMENT')
                                    <span class="px-2.5 py-1 rounded-full bg-blue-100 text-blue-800 text-[10px] font-bold">MENUNGGU BAYAR</span>
                                @elseif($order->status === 'PAID')
                                    <span class="px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">LUNAS</span>
                                @else
                                    <span class="px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 text-[10px] font-bold">{{ $order->status }}</span>
                                @endif
                            </td>
                            <td class="p-4 text-center">
                                @if($order->status === 'PENDING_QUOTE')
                                <form action="{{ route('admin.orders.setShipping', $order->id) }}" method="POST" class="flex items-center gap-2 justify-center">
                                    @csrf
                                    <input type="number" name="shipping_cost" placeholder="Nominal Ongkir" required min="0"
                                           class="w-28 px-3 py-1.5 rounded-lg border border-slate-300 text-xs focus:ring-2 focus:ring-emerald-500 outline-none">
                                    <button type="submit" class="px-3 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs transition">
                                        Set & Kirim WA &rarr;
                                    </button>
                                </form>
                                @elseif($order->status === 'AWAITING_PAYMENT')
                                <div class="flex items-center gap-2 justify-center">
                                    <a href="{{ $order->payment_url }}" target="_blank" class="text-xs font-bold text-blue-600 underline hover:text-blue-800">
                                        Link Snap
                                    </a>
                                    <form action="{{ route('admin.orders.markAsPaid', $order->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" onclick="return confirm('Konfirmasi pembayaran lunas untuk order ini?')" 
                                                class="px-2.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow transition">
                                            ✓ Tandai Lunas
                                        </button>
                                    </form>
                                </div>
                                @else
                                <span class="text-xs font-bold text-emerald-600">✓ Selesai (Lunas)</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="p-8 text-center text-slate-400">Belum ada order adopsi masuk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>