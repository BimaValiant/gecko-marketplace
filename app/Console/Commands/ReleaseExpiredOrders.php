<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class ReleaseExpiredOrders extends Command
{
    protected $signature = 'orders:release-expired';
    protected $description = 'Release locked geckos if order is expired';

    public function handle()
    {
        $expiredOrders = Order::whereIn('status', ['PENDING_QUOTE', 'AWAITING_PAYMENT'])
            ->where('locked_until', '<', now())
            ->get();

        foreach ($expiredOrders as $order) {
            $order->update(['status' => 'EXPIRED']);
            $order->gecko()->update(['status' => 'READY STOCK']);
        }

        $this->info(count($expiredOrders) . ' expired order(s) released.');
    }
}