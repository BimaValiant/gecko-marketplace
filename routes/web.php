<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeckoController;
use App\Http\Controllers\Admin\GeckoAdminController;

// Public Routes
Route::get('/', [GeckoController::class, 'index'])->name('landing');
Route::get('/katalog', [GeckoController::class, 'catalog'])->name('katalog');
Route::get('/gecko/{gecko}', [GeckoController::class, 'show'])->name('gecko.show');

// Route Kirim Testimoni Publik dari User
Route::post('/testimonial/store', [GeckoController::class, 'storeTestimonial'])->name('testimonial.public.store');

// Route Auth / Login (Mencegah Error Route [login] not defined)
Route::get('/login', [GeckoAdminController::class, 'loginView'])->name('login');
Route::post('/login', [GeckoAdminController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [GeckoAdminController::class, 'logout'])->name('logout');

// Admin Routes (Dikunci dengan Auth)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [GeckoAdminController::class, 'index'])->name('index');
    Route::post('/geckos', [GeckoAdminController::class, 'store'])->name('store');
    Route::put('/geckos/{gecko}', [GeckoAdminController::class, 'update'])->name('update');
    Route::patch('/geckos/{gecko}/toggle-featured', [GeckoAdminController::class, 'toggleFeatured'])->name('geckos.toggleFeatured');
    Route::delete('/geckos/{gecko}', [GeckoAdminController::class, 'destroy'])->name('destroy');
    
    // Testimonial Admin Routes
    Route::post('/testimonials', [GeckoAdminController::class, 'storeTestimonial'])->name('testimonials.store');
    Route::patch('/testimonials/{id}/toggle', [GeckoAdminController::class, 'toggleTestimonial'])->name('testimonials.toggle');
    Route::delete('/testimonials/{id}', [GeckoAdminController::class, 'destroyTestimonial'])->name('testimonials.destroy');
});