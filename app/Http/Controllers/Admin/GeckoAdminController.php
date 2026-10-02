<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gecko;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; // <-- TAMBAHAN: Import facade Auth

class GeckoAdminController extends Controller
{
    // ==========================================
    // TAMBAHAN METHOD AUTH (LOGIN / LOGOUT)
    // ==========================================

    public function loginView()
    {
        if (Auth::check()) {
            return redirect()->route('admin.index');
        }
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    // ==========================================
    // METHOD LAMA (TETAP SAMA 100%, TANPA DIUBAH)
    // ==========================================

    public function index()
    {
        $geckos = Gecko::latest()->get();
        $totalGecko = $geckos->count();
        $readyStock = $geckos->where('status', 'READY STOCK')->count();
        $terjual = $geckos->where('status', 'TERJUAL')->count();
        $featuredCount = $geckos->where('is_featured', true)->count();
        $testimonials = Testimonial::latest()->get();

        return view('admin', compact('geckos', 'totalGecko', 'readyStock', 'terjual', 'featuredCount', 'testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code_name'   => 'required|string|max:255',
            'morph'       => 'required|string|max:255',
            'gender'      => 'required|string',
            'age'         => 'required|string',
            'feeding'     => 'required|string',
            'dob'         => 'nullable|string',
            'defect'      => 'nullable|string',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'status'      => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
            'images.*'    => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        $data = $request->all();
        $data['is_featured'] = $request->has('is_featured');

        // Upload Sampul Utama
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('geckos', 'public');
        }

        // Upload Galeri Foto Tambahan
        $gallery = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $gallery[] = $file->store('geckos/gallery', 'public');
            }
        }
        $data['images'] = $gallery;

        Gecko::create($data);

        return redirect()->route('admin.index')->with('success', 'Data Gecko berhasil ditambahkan!');
    }

    public function update(Request $request, Gecko $gecko)
    {
        $request->validate([
            'code_name'   => 'required|string|max:255',
            'morph'       => 'required|string|max:255',
            'gender'      => 'required|string',
            'age'         => 'required|string',
            'feeding'     => 'required|string',
            'dob'         => 'nullable|string',
            'defect'      => 'nullable|string',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'status'      => 'required|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'images.*'    => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        $data = $request->all();
        $data['is_featured'] = $request->has('is_featured');

        // Update Sampul Utama jika ada file baru
        if ($request->hasFile('image')) {
            if ($gecko->image && Storage::disk('public')->exists($gecko->image)) {
                Storage::disk('public')->delete($gecko->image);
            }
            $data['image'] = $request->file('image')->store('geckos', 'public');
        } else {
            unset($data['image']);
        }

        // Update Galeri Foto jika ada unggahan baru
        if ($request->hasFile('images')) {
            if ($gecko->images && is_array($gecko->images)) {
                foreach ($gecko->images as $oldImg) {
                    if (Storage::disk('public')->exists($oldImg)) {
                        Storage::disk('public')->delete($oldImg);
                    }
                }
            }
            $gallery = [];
            foreach ($request->file('images') as $file) {
                $gallery[] = $file->store('geckos/gallery', 'public');
            }
            $data['images'] = $gallery;
        } else {
            unset($data['images']);
        }

        $gecko->update($data);

        return redirect()->route('admin.index')->with('success', 'Data Gecko berhasil diperbarui!');
    }

    // Toggle Tampil di Landing Page
    public function toggleFeatured(Gecko $gecko)
    {
        $gecko->is_featured = !$gecko->is_featured;
        $gecko->save();

        $statusMsg = $gecko->is_featured ? 'ditampilkan di Landing Page!' : 'disembunyikan dari Landing Page.';
        return back()->with('success', 'Gecko ' . $gecko->code_name . ' (' . $gecko->morph . ') berhasil ' . $statusMsg);
    }

    public function destroy(Gecko $gecko)
    {
        // Hapus foto utama & galeri dari disk
        if ($gecko->image && Storage::disk('public')->exists($gecko->image)) {
            Storage::disk('public')->delete($gecko->image);
        }

        if ($gecko->images && is_array($gecko->images)) {
            foreach ($gecko->images as $img) {
                if (Storage::disk('public')->exists($img)) {
                    Storage::disk('public')->delete($img);
                }
            }
        }

        $gecko->delete();

        return redirect()->route('admin.index')->with('success', 'Data Gecko berhasil dihapus!');
    }

    public function storeTestimonial(Request $request)
    {
        $request->validate([
            'client_name'   => 'required|string|max:255',
            'city'          => 'nullable|string|max:255',
            'morph_adopted' => 'nullable|string|max:255',
            'review'        => 'required|string',
            'rating'        => 'required|integer|min:1|max:5',
        ]);

        Testimonial::create($request->all());

        return back()->with('success', 'Testimoni pembeli berhasil ditambahkan!');
    }

    public function destroyTestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return back()->with('success', 'Testimoni berhasil dihapus!');
    }

    // Toggle Status Approval Testimoni (Setujui / Sembunyikan)
public function toggleTestimonial($id)
{
    $testimonial = Testimonial::findOrFail($id);
    $testimonial->is_approved = !$testimonial->is_approved;
    $testimonial->save();

    $statusMsg = $testimonial->is_approved ? 'ditampilkan di Landing Page!' : 'disembunyikan dari Landing Page.';
    return back()->with('success', 'Status testimoni berhasil ' . $statusMsg);
}
}