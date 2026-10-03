<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use Illuminate\Support\Facades\Log;

class AutoReleaseExpiredOrders extends Command
{
    /**
     * Nama perintah artisan yang bisa dijalankan manual atau via schedule.
     */
    protected $signature = 'orders:release-expired';

    /**
     * Deskripsi perintah.
     */
    protected $description = 'Membatalkan order expired otomatis & melepas stok gecko kembali ke READY STOCK';

    /**
     * Eksekusi logika utama pembatalan otomatis.
     */
    public function handle()
    {
        // Cari order yang belum lunas/selesai dan batas locked_until-nya sudah lewat
        $expiredOrders = Order::whereIn('status', ['PENDING_QUOTE', 'AWAITING_PAYMENT'])
            ->where('locked_until', '<', now())
            ->get();

        $count = 0;
        foreach ($expiredOrders as $order) {
            // Lepas status gecko kembali ke READY STOCK jika masih ter-LOCKED
            if ($order->gecko && $order->gecko->status === 'LOCKED') {
                $order->gecko->update(['status' => 'READY STOCK']);
            }

            // Ubah status order menjadi CANCELLED
            $order->update(['status' => 'CANCELLED']);
            $count++;
        }

        if ($count > 0) {
            $this->info("Berhasil membatalkan {$count} order ghoib & melepaskan stok gecko.");
            Log::info("AutoReleaseExpiredOrders: {$count} order expired berhasil dibatalkan.");
        }
    }
}