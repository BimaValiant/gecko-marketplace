<?php

namespace App\Http\Controllers;

use App\Models\Gecko;
use App\Models\Testimonial; // <-- 1. IMPORT MODEL TESTIMONIAL
use Illuminate\Http\Request;

class GeckoController extends Controller
{
    private $phoneAdmin = "6285923568144";

    public function index()
    {
        $geckos = Gecko::latest()->get();

        foreach ($geckos as $gecko) {
            $formattedPrice = "Rp " . number_format($gecko->price, 0, ',', '.');
            
            $message = "Halo Kak Admin Valiant Exotics!\n\n"
                . "Saya mau tanya / order gecko ini dong:\n"
                . "• Nama/Kode: {$gecko->code_name} (#GECKO-{$gecko->id})\n"
                . "• Morph: {$gecko->morph}\n"
                . "• Harga: {$formattedPrice}\n\n"
                . "Apakah gecko ini masih ready? Terima kasih!";
            
            $gecko->wa_link = "https://wa.me/" . $this->phoneAdmin . "?text=" . urlencode($message);
        }

        // 2. AMBIL DATA TESTIMONI DARI DATABASE
        $testimonials = Testimonial::latest()->get();

        // 3. MASUKKAN 'testimonials' KE DALAM COMPACT
        return view('landing', compact('geckos', 'testimonials'));
    }

    public function show(Gecko $gecko)
    {
        $formattedPrice = "Rp " . number_format($gecko->price, 0, ',', '.');
        $detailUrl = route('gecko.show', $gecko->id);

        $message = "Halo Kak Admin Valiant Exotics!\n\n"
            . "Saya mau tanya info selengkapnya untuk gecko ini:\n"
            . "• Nama/Kode: {$gecko->code_name} (#GECKO-{$gecko->id})\n"
            . "• Morph: {$gecko->morph}\n"
            . "• Kondisi: " . ($gecko->defect ?? 'Mulus / No Minus') . "\n"
            . "• Harga: {$formattedPrice}\n"
            . "• Link Detail: {$detailUrl}\n\n"
            . "Apakah masih ready stock, Kak? Terima kasih!";

        $waLink = "https://wa.me/" . $this->phoneAdmin . "?text=" . urlencode($message);

        $otherGeckos = Gecko::where('id', '!=', $gecko->id)->latest()->take(4)->get();

        return view('gecko-detail', compact('gecko', 'waLink', 'otherGeckos'));
    }
}