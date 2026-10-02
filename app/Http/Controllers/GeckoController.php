<?php

namespace App\Http\Controllers;

use App\Models\Gecko;
use App\Models\Testimonial;
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

        // HANYA AMBIL TESTIMONI YANG SUDAH DISETUJUI ADMIN (is_approved = true)
        $testimonials = Testimonial::where('is_approved', true)->latest()->get();

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

    // FITUR BARU: MENERIMA INPUT TESTIMONI DARI PUBLIK (USER)
    public function storeTestimonial(Request $request)
    {
        $request->validate([
            'client_name'   => 'required|string|max:255',
            'city'          => 'nullable|string|max:255',
            'morph_adopted' => 'nullable|string|max:255',
            'review'        => 'required|string',
            'rating'        => 'required|integer|min:1|max:5',
        ]);

        Testimonial::create([
            'client_name'   => $request->client_name,
            'city'          => $request->city,
            'morph_adopted' => $request->morph_adopted,
            'review'        => $request->review,
            'rating'        => $request->rating,
            'is_approved'   => false, // Otomatis pending (menunggu persetujuan admin)
        ]);

        return back()->with('success_testi', 'Terima kasih! Ulasan Anda telah dikirim dan sedang ditinjau oleh admin.');
    }
}