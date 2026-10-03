<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeckoController;
use App\Http\Controllers\Admin\GeckoAdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\MidtransCallbackController;

/*
|--------------------------------------------------------------------------
| Public Routes (Tanpa Auth / Bebas Akses Pembeli)
|--------------------------------------------------------------------------
*/
Route::get('/', [GeckoController::class, 'index'])->name('landing');
Route::get('/katalog', [GeckoController::class, 'catalog'])->name('katalog');
Route::get('/gecko/{gecko}', [GeckoController::class, 'show'])->name('gecko.show');

// Route Booking Gecko oleh Buyer
Route::post('/gecko/{id}/book', [OrderController::class, 'storeRequest'])->name('gecko.book');

// Route Kirim Testimoni Publik dari User
Route::post('/testimonial/store', [GeckoController::class, 'storeTestimonial'])->name('testimonial.public.store');

/*
|--------------------------------------------------------------------------
| Webhook Midtrans (Di Luar Middleware Auth & CSRF)
|--------------------------------------------------------------------------
*/
Route::post('/midtrans/callback', [MidtransCallbackController::class, 'handle'])
    ->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])
    ->name('midtrans.callback');

/*
|--------------------------------------------------------------------------
| Auth / Login Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [GeckoAdminController::class, 'loginView'])->name('login');
Route::post('/login', [GeckoAdminController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [GeckoAdminController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Routes (Dikunci dengan Auth Middleware)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Admin Gecko Management
    Route::get('/', [GeckoAdminController::class, 'index'])->name('index');
    Route::post('/geckos', [GeckoAdminController::class, 'store'])->name('store');
    Route::put('/geckos/{gecko}', [GeckoAdminController::class, 'update'])->name('update');
    Route::patch('/geckos/{gecko}/toggle-featured', [GeckoAdminController::class, 'toggleFeatured'])->name('geckos.toggleFeatured');
    Route::delete('/geckos/{gecko}', [GeckoAdminController::class, 'destroy'])->name('destroy');
    
    // Testimonial Admin Routes
    Route::post('/testimonials', [GeckoAdminController::class, 'storeTestimonial'])->name('testimonials.store');
    Route::patch('/testimonials/{id}/toggle', [GeckoAdminController::class, 'toggleTestimonial'])->name('testimonials.toggle');
    Route::delete('/testimonials/{id}', [GeckoAdminController::class, 'destroyTestimonial'])->name('testimonials.destroy');

    // Admin Order Management Routes
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
    Route::post('/orders/{id}/set-shipping', [AdminOrderController::class, 'setShippingAndGeneratePayment'])->name('orders.setShipping');
    Route::post('/orders/{id}/mark-as-paid', [AdminOrderController::class, 'markAsPaid'])->name('orders.markAsPaid');
    
    // Route Batal & Hapus Order (Otomatis dapat name: admin.orders.cancel & admin.orders.destroy)
    Route::patch('/orders/{id}/cancel', [AdminOrderController::class, 'cancelOrder'])->name('orders.cancel');
    Route::delete('/orders/{id}', [AdminOrderController::class, 'destroy'])->name('orders.destroy');
});