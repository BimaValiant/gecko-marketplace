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
    <div class="max-w-7xl mx-auto">
        
        <!-- Flash Alert Message -->
        @if(session('success'))
        <div class="mb-6 p-4 rounded-2xl bg-emerald-500 text-white font-bold text-xs shadow-lg flex items-center justify-between">
            <span>✨ {{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="text-white hover:opacity-75 font-black">&times;</button>
        </div>
        @endif

        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-black text-slate-900">Dashboard Order Adopsi</h1>
                <p class="text-xs text-slate-500 mt-1">Kelola permintaan booking, konfirmasi ongkir, & batalkan pesanan ghoib.</p>
            </div>
            <a href="{{ route('katalog') }}" class="px-4 py-2 rounded-xl bg-white text-xs font-bold shadow-sm border border-slate-200 hover:bg-slate-50 transition">
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
                            <!-- Kode Order -->
                            <td class="p-4 font-extrabold text-slate-900">#{{ $order->order_code }}</td>
                            
                            <!-- Foto & Detail Gecko -->
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <img src="{{ $order->gecko && ($order->gecko->image || $order->gecko->image_url || $order->gecko->photo) 
            ? asset('storage/' . ($order->gecko->image ?? $order->gecko->image_url ?? $order->gecko->photo)) 
            : 'https://placehold.co/100x100?text=No+Img' }}" 
     alt="Gecko" 
     class="w-12 h-12 object-cover rounded-xl border border-slate-200 bg-slate-100 flex-shrink-0">
                                    <div>
                                        <span class="font-bold text-slate-900 block leading-tight">{{ $order->gecko->morph ?? 'Gecko Dihapus' }}</span>
                                        <span class="text-[10px] text-slate-400">#GECKO-{{ $order->gecko_id }}</span>
                                    </div>
                                </div>
                            </td>

                            <!-- Pembeli & WA -->
                            <td class="p-4">
                                <span class="font-bold block text-slate-900">{{ $order->buyer_name }}</span>
                                <a href="https://wa.me/{{ preg_replace('/^0/', '62', $order->buyer_phone) }}" target="_blank" class="text-emerald-600 hover:underline font-semibold flex items-center gap-1">
                                    <span>💬</span> {{ $order->buyer_phone }}
                                </a>
                            </td>

                            <!-- Tujuan -->
                            <td class="p-4">
                                <span class="font-bold block text-emerald-700">{{ $order->destination_city }}</span>
                                <span class="text-[10px] text-slate-400 block max-w-[150px] truncate" title="{{ $order->shipping_address }}">{{ $order->shipping_address }}</span>
                            </td>

                            <!-- Harga Gecko -->
                            <td class="p-4 font-bold">Rp {{ number_format($order->gecko_price, 0, ',', '.') }}</td>

                            <!-- Ongkir -->
                            <td class="p-4 font-bold text-emerald-600">
                                {{ $order->shipping_cost > 0 ? 'Rp ' . number_format($order->shipping_cost, 0, ',', '.') : 'Belum Set' }}
                            </td>

                            <!-- Status Badges -->
                            <td class="p-4">
                                @if($order->status === 'PENDING_QUOTE')
                                    <span class="px-2.5 py-1 rounded-full bg-amber-100 text-amber-800 text-[10px] font-bold">MENUNGGU ONGKIR</span>
                                @elseif($order->status === 'AWAITING_PAYMENT')
                                    <span class="px-2.5 py-1 rounded-full bg-blue-100 text-blue-800 text-[10px] font-bold">MENUNGGU BAYAR</span>
                                @elseif($order->status === 'PAID')
                                    <span class="px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">LUNAS</span>
                                @elseif($order->status === 'CANCELLED')
                                    <span class="px-2.5 py-1 rounded-full bg-rose-100 text-rose-700 text-[10px] font-bold">BATAL</span>
                                @else
                                    <span class="px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 text-[10px] font-bold">{{ $order->status }}</span>
                                @endif
                            </td>

                            <!-- Aksi & Set Ongkir & Batal -->
                            <td class="p-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    @if($order->status === 'PENDING_QUOTE')
                                        <form action="{{ route('admin.orders.setShipping', $order->id) }}" method="POST" class="flex items-center gap-1.5">
                                            @csrf
                                            <input type="number" name="shipping_cost" placeholder="Ongkir" required min="0"
                                                   class="w-24 px-2.5 py-1.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-emerald-500 outline-none">
                                            <button type="submit" class="px-3 py-1.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs transition shadow-sm">
                                                Set & WA &rarr;
                                            </button>
                                        </form>

                                    @elseif($order->status === 'AWAITING_PAYMENT')
                                        <a href="{{ $order->payment_url }}" target="_blank" class="px-2.5 py-1.5 rounded-xl bg-blue-50 text-blue-600 hover:bg-blue-100 font-bold text-xs transition border border-blue-200">
                                            Link Snap
                                        </a>
                                        <form action="{{ route('admin.orders.markAsPaid', $order->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" onclick="return confirm('Konfirmasi pembayaran lunas untuk order ini?')" 
                                                    class="px-2.5 py-1.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-sm transition">
                                                ✓ Lunas
                                            </button>
                                        </form>

                                    @elseif($order->status === 'PAID')
                                        <span class="text-xs font-bold text-emerald-600 flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                            Selesai
                                        </span>
                                    @else
                                        <span class="text-xs font-bold text-slate-400">Dibatalkan</span>
                                    @endif

                                    <!-- Tombol Pembatalan Order (Hanya jika belum LUNAS / CANCELLED) -->
                                    @if($order->status !== 'PAID' && $order->status !== 'CANCELLED')
                                        <form action="{{ route('admin.orders.cancel', $order->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" onclick="return confirm('Batalkan pesanan ini dan lepas stok Gecko kembali ke READY STOCK?')" 
                                                    class="p-1.5 rounded-lg text-amber-600 hover:bg-amber-50 transition" title="Batalkan & Release Stok">
                                                🚫
                                            </button>
                                        </form>
                                    @endif

                                    <!-- Tombol Hapus Permanen -->
                                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data order ini secara permanen?')" 
                                                class="p-1.5 rounded-lg text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition" title="Hapus Permanen">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="p-8 text-center text-slate-400 font-semibold">Belum ada order adopsi masuk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>