<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up(): void
{
    Schema::create('geckos', function (Blueprint $table) {
        $table->id();
        $table->string('code_name');
        $table->string('morph');
        $table->string('gender');
        $table->string('age');
        $table->string('feeding');
        $table->string('dob')->nullable(); // Tanggal Lahir (cth: 15 Mei 2025)
        $table->string('defect')->default('Mulus / No Minus'); // Kondisi/Cacat
        $table->text('description')->nullable(); // Deskripsi & Catatan
        $table->decimal('price', 12, 2);
        $table->string('status')->default('READY STOCK');
        $table->string('image'); // Foto Sampul Utama
        $table->json('images')->nullable(); // Galeri Foto Tambahan (Multi-foto)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geckos');
    }
};
