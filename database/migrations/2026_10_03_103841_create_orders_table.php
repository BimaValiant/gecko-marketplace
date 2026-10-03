<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->unique();
            $table->foreignId('gecko_id')->constrained('geckos')->onDelete('cascade');
            $table->string('buyer_name');
            $table->string('buyer_phone');
            $table->string('destination_city');
            $table->text('shipping_address');
            $table->decimal('gecko_price', 12, 2);
            $table->decimal('shipping_cost', 12, 2)->default(0);
            $table->decimal('total_price', 12, 2)->default(0);
            
            // Status Order: PENDING_QUOTE -> AWAITING_PAYMENT -> PAID / EXPIRED / CANCELLED
            $table->enum('status', ['PENDING_QUOTE', 'AWAITING_PAYMENT', 'PAID', 'EXPIRED', 'CANCELLED'])->default('PENDING_QUOTE');
            
            $table->string('payment_url')->nullable();
            $table->timestamp('locked_until')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('orders');
    }
};