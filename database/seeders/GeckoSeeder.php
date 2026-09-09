<?php

namespace Database\Seeders;

use App\Models\Gecko;
use Illuminate\Database\Seeder;

class GeckoSeeder extends Seeder
{
    public function run(): void
    {
        Gecko::create([
            'code_name' => 'Saffron',
            'morph' => 'Super Hypo Tangerine',
            'gender' => 'Female',
            'age' => '10 bln',
            'feeding' => 'Feeder aktif',
            'price' => 450000,
            'status' => 'READY STOCK',
            'image' => 'https://images.unsplash.com/photo-1508811346859-3a5ab0300c17?auto=format&fit=crop&q=80&w=800'
        ]);

        Gecko::create([
            'code_name' => 'Nimbus',
            'morph' => 'Mack Snow',
            'gender' => 'Unsex',
            'age' => '7 bln',
            'feeding' => 'Feeder aktif',
            'price' => 600000,
            'status' => 'READY STOCK',
            'image' => 'https://images.unsplash.com/photo-1563281577-a7be47e20db9?auto=format&fit=crop&q=80&w=800'
        ]);

        Gecko::create([
            'code_name' => 'Opal',
            'morph' => 'Tremper Albino',
            'gender' => 'Female',
            'age' => '12 bln',
            'feeding' => 'Feeder aktif',
            'price' => 550000,
            'status' => 'READY STOCK',
            'image' => 'https://images.unsplash.com/photo-1508811346859-3a5ab0300c17?auto=format&fit=crop&q=80&w=800'
        ]);

        Gecko::create([
            'code_name' => 'Onyx',
            'morph' => 'Black Night',
            'gender' => 'Male',
            'age' => '18 bln',
            'feeding' => 'Feeder aktif',
            'price' => 1250000,
            'status' => 'TERJUAL',
            'image' => 'https://images.unsplash.com/photo-1504450758481-7338eba7524a?auto=format&fit=crop&q=80&w=800'
        ]);
    }
}