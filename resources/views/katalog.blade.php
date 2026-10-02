<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Koleksi Gecko – Valiant Exotics</title>
    <link rel="icon" type="image/png" href="{{ asset('LOGOGECKOFINAL.png') }}">

    <meta property="og:title" content="Katalog Koleksi Leopard Gecko – Valiant Exotics">
    <meta property="og:description" content="Jelajahi seluruh koleksi Leopard Gecko & AFT berkualitas, bergaransi 100% Live Arrival.">
    <meta property="og:image" content="{{ asset('LOGOGECKOFINAL.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        /* ── SKELETON ─── */
        @keyframes skeletonWave {
            0%   { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        .skeleton-shimmer {
            background: linear-gradient(90deg, #f1f5f9 25%, #e2e8f0 50%, #f1f5f9 75%);
            background-size: 200% 100%;
            animation: skeletonWave 2s infinite ease-in-out;
        }

        /* ── MODAL ─── */
        .modal-spring {
            transition: transform 300ms cubic-bezier(0.16,1,0.3,1),
                        opacity  300ms cubic-bezier(0.16,1,0.3,1);
        }

        /* ── PRODUCT CARD ─── */
        .gecko-card {
            transition: box-shadow 280ms ease, transform 280ms cubic-bezier(0.16,1,0.3,1);
            will-change: transform;
        }
        .gecko-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(15,23,42,0.10);
        }
        .gecko-card:active { transform: scale(0.97); }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white overflow-x-hidden flex flex-col min-h-screen">

<!-- ══════════════════════════════════════════════════════════
     NAVBAR
═══════════════════════════════════════════════════════════ -->
<header id="mainHeader" class="w-full bg-white/85 backdrop-blur-xl sticky top-0 z-50 border-b border-slate-200/60 shadow-[0_1px_0_rgba(0,0,0,0.04)] transition-all duration-300">
    <div id="headerContainer" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-[72px] flex items-center justify-between transition-all duration-300">

        <a href="{{ route('landing') }}" class="flex items-center gap-2.5 sm:gap-3 group flex-shrink-0">
            <div id="logoBox" class="w-10 h-10 sm:w-11 sm:h-11 flex-shrink-0 transition-all duration-300">
                <img src="{{ asset('LOGOGECKOFINAL.png') }}" alt="Valiant Exotics" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="flex flex-col leading-none">
                <span class="font-black text-[15px] sm:text-lg tracking-tight text-slate-900">VALIANT</span>
                <span class="font-bold text-[8px] sm:text-[9px] tracking-[0.2em] text-slate-400 uppercase mt-0.5">EXOTICS</span>
            </div>
        </a>

        <nav class="hidden md:flex items-center gap-8 text-[13px] font-semibold text-slate-500">
            <a href="{{ route('landing') }}" class="hover:text-slate-900 transition-colors duration-200">Beranda</a>
            <a href="{{ route('katalog') }}" class="text-emerald-600 font-bold flex items-center gap-1.5">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                Katalog
            </a>
            <button onclick="openCareModal()" class="hover:text-slate-900 transition-colors duration-200">Perawatan</button>
            <a href="{{ route('landing') }}#faq" class="hover:text-slate-900 transition-colors duration-200">FAQ & Garansi</a>
            <a href="{{ route('landing') }}#kontak" class="hover:text-slate-900 transition-colors duration-200">Kontak</a>
        </nav>

        <div class="flex items-center gap-2.5">
            <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank"
               class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-600 hover:bg-emerald-700 active:scale-95 text-white text-[13px] font-semibold transition-all duration-150 shadow-sm">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                Hubungi Kami
            </a>
            <button id="menuBtn" class="md:hidden p-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 active:scale-95 text-slate-700 transition focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <div id="mobileMenu" class="hidden md:hidden border-t border-slate-100 bg-white/95 px-5 py-4 space-y-1 shadow-lg">
        <a href="{{ route('landing') }}" class="block px-3 py-2.5 rounded-xl font-semibold text-slate-700 text-sm hover:bg-slate-50">Beranda</a>
        <a href="{{ route('katalog') }}" class="block px-3 py-2.5 rounded-xl font-bold text-emerald-600 text-sm">Katalog Lengkap</a>
        <button onclick="openCareModal()" class="block w-full text-left px-3 py-2.5 rounded-xl font-semibold text-slate-700 text-sm hover:bg-slate-50">Perawatan Gecko</button>
        <a href="{{ route('landing') }}#faq" class="block px-3 py-2.5 rounded-xl font-semibold text-slate-700 text-sm hover:bg-slate-50">FAQ & Garansi</a>
        <a href="{{ route('landing') }}#kontak" class="block px-3 py-2.5 rounded-xl font-semibold text-slate-700 text-sm hover:bg-slate-50">Kontak</a>
        <div class="pt-2">
            <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank"
               class="w-full py-3 rounded-2xl bg-emerald-600 hover:bg-emerald-700 active:scale-95 text-white text-sm font-bold flex items-center justify-center gap-2 transition">
                Hubungi via WhatsApp
            </a>
        </div>
    </div>
</header>


<!-- ══════════════════════════════════════════════════════════
     PAGE HEADER
═══════════════════════════════════════════════════════════ -->
<div class="bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10" data-aos="fade-up" data-aos-duration="500">

        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs font-medium text-slate-400 mb-5">
            <a href="{{ route('landing') }}" class="hover:text-slate-700 transition-colors duration-200 flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                Beranda
            </a>
            <span class="text-slate-300">/</span>
            <span class="text-slate-700 font-semibold">Katalog Produk</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <div class="flex items-center gap-2.5 mb-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-[11px] font-bold tracking-widest text-emerald-600 uppercase">Valiant Collection</span>
                    <span class="px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-600 text-[10px] font-bold">
                        {{ $totalGeckos ?? count($geckos) }} Unit Terdata
                    </span>
                </div>
                <h1 class="text-2xl sm:text-4xl font-black tracking-tight text-slate-900 leading-tight">Katalog Seluruh Koleksi</h1>
                <p class="text-xs sm:text-sm text-slate-400 mt-1.5 max-w-2xl leading-relaxed">
                    Gunakan pencarian dan filter di bawah untuk menemukan gecko impian Anda — kualitas terjamin, garansi 100% Live Arrival.
                </p>
            </div>
            <a href="{{ route('landing') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 active:scale-95 text-slate-700 text-xs font-semibold transition self-start md:self-auto">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     MAIN KATALOG
═══════════════════════════════════════════════════════════ -->
<main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10">

    <!-- SEARCH & FILTER BAR -->
    <div class="flex flex-col sm:flex-row gap-3 mb-8 items-stretch sm:items-center bg-white p-3 sm:p-3.5 rounded-2xl sm:rounded-3xl border border-slate-200/70 shadow-sm" data-aos="fade-up" data-aos-duration="500">
        <!-- Search -->
        <div class="relative flex-1">
            <svg class="w-4 h-4 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" id="searchInput" placeholder="Cari morph atau nama gecko..."
                   class="w-full pl-11 pr-4 py-2.5 sm:py-3 bg-slate-50 rounded-xl sm:rounded-2xl border border-slate-200/80 text-xs sm:text-sm font-medium focus:bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition">
        </div>

        <!-- Morph filter -->
        <select id="morphFilter" class="px-4 py-2.5 sm:py-3 bg-slate-50 rounded-xl sm:rounded-2xl border border-slate-200/80 text-xs sm:text-sm font-medium text-slate-600 focus:bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition">
            <option value="">Semua Morph</option>
            @php $uniqueMorphs = collect($geckos)->pluck('morph')->filter()->unique(); @endphp
            @foreach($uniqueMorphs as $m)
                <option value="{{ $m }}">{{ $m }}</option>
            @endforeach
        </select>

        <!-- Sort -->
        <select id="sortFilter" class="px-4 py-2.5 sm:py-3 bg-slate-50 rounded-xl sm:rounded-2xl border border-slate-200/80 text-xs sm:text-sm font-medium text-slate-600 focus:bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition">
            <option value="default">Urutkan: Terbaru</option>
            <option value="price-asc">Harga: Terendah ke Tinggi</option>
            <option value="price-desc">Harga: Tertinggi ke Rendah</option>
        </select>

        <!-- Ready toggle -->
        <button id="readyToggleBtn" type="button"
                class="px-4 py-2.5 sm:py-3 bg-slate-50 border border-slate-200/80 rounded-xl sm:rounded-2xl text-xs sm:text-sm font-semibold text-slate-600 hover:text-slate-900 active:scale-95 transition flex items-center justify-center gap-2 select-none flex-shrink-0">
            <span id="readyIndicator" class="w-2.5 h-2.5 rounded-full bg-slate-300 transition-colors"></span>
            Hanya Ready Stock
        </button>
    </div>

    <!-- GRID -->
    <div id="geckoGrid" class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-5">
        @forelse($geckos as $gecko)
        @php
            $codeName = $gecko['code_name'] ?? $gecko->code_name;
            $morph    = $gecko['morph']      ?? $gecko->morph;
            $status   = $gecko['status']     ?? $gecko->status;
            $price    = $gecko['price']      ?? $gecko->price;
            $id       = $gecko['id']         ?? $gecko->id;
        @endphp
        <div class="gecko-card group bg-white rounded-2xl sm:rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col"
             data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ ($loop->index % 4) * 65 }}"
             data-name="{{ strtolower($codeName) }}"
             data-morph="{{ strtolower($morph) }}"
             data-status="{{ strtolower($status) }}"
             data-price="{{ $price }}">

            <!-- Image -->
            <a href="{{ route('gecko.show', $id) }}" class="block relative aspect-[4/3] bg-slate-100 overflow-hidden skeleton-shimmer">
                <img src="{{ \Illuminate\Support\Str::startsWith($gecko['image'] ?? $gecko->image, 'http') ? ($gecko['image'] ?? $gecko->image) : asset('storage/' . ($gecko['image'] ?? $gecko->image)) }}"
                     alt="{{ $morph }}" loading="lazy"
                     class="w-full h-full object-cover group-hover:scale-[1.04] transition-transform duration-500 ease-out">
                <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-full text-[9px] sm:text-[10px] font-bold tracking-wider backdrop-blur-sm {{ $status === 'READY STOCK' ? 'bg-emerald-500/90 text-white border border-emerald-400/30' : 'bg-slate-900/80 text-slate-200 border border-white/15' }}">
                    {{ $status }}
                </span>
            </a>

            <!-- Body -->
            <div class="p-3 sm:p-4 flex flex-col flex-1 gap-1.5">
                <span class="text-[10px] sm:text-xs font-semibold text-slate-400 truncate">{{ $codeName }}</span>
                <a href="{{ route('gecko.show', $id) }}"
                   class="font-bold text-xs sm:text-[15px] text-slate-900 group-hover:text-emerald-600 transition-colors duration-200 leading-snug line-clamp-2">
                    {{ $morph }}
                </a>

                <div class="flex flex-wrap gap-1 mt-0.5">
                    <span class="px-1.5 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[9px] sm:text-[11px] font-semibold">{{ $gecko['gender'] ?? $gecko->gender }}</span>
                    <span class="px-1.5 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[9px] sm:text-[11px] font-semibold">{{ $gecko['age'] ?? $gecko->age }}</span>
                    <span class="hidden sm:inline-block px-1.5 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[11px] font-semibold">{{ $gecko['feeding'] ?? $gecko->feeding }}</span>
                </div>

                <div class="mt-auto pt-2.5 flex items-center justify-between gap-2">
                    <span class="text-xs sm:text-[15px] font-black text-slate-900">Rp {{ number_format($price, 0, ',', '.') }}</span>
                    <a href="{{ route('gecko.show', $id) }}"
                       class="flex-shrink-0 px-3 py-1.5 rounded-xl bg-[#0b1329] hover:bg-slate-800 active:scale-95 text-white font-bold text-[10px] sm:text-xs transition-all duration-150 flex items-center gap-1.5">
                        Detail
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full py-16 text-center">
            <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3 text-slate-400">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
            </div>
            <h3 class="text-slate-900 font-bold text-base mb-1">Belum Ada Koleksi Gecko</h3>
            <p class="text-slate-400 text-xs">Produk sedang dalam persiapan oleh admin.</p>
        </div>
        @endforelse
    </div>

    <!-- NO RESULTS -->
    <div id="noResults" class="hidden py-16 text-center">
        <div class="w-14 h-14 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3 text-slate-400">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
        <h3 class="text-slate-900 font-bold text-sm mb-1">Gecko tidak ditemukan</h3>
        <p class="text-slate-400 text-xs max-w-sm mx-auto">Tidak ada gecko yang cocok dengan filter yang dipilih. Coba kata kunci lain.</p>
    </div>

    <!-- BOTTOM CTA BANNER -->
    <div class="mt-14 sm:mt-16 bg-[#0b1329] rounded-3xl p-6 sm:p-10 text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl relative overflow-hidden" data-aos="fade-up" data-aos-duration="500">
        <div class="absolute top-0 right-0 w-64 h-full pointer-events-none" style="background: radial-gradient(ellipse 80% 100% at 100% 50%, rgba(16,185,129,0.09), transparent 70%);" aria-hidden="true"></div>
        <div class="space-y-2 relative">
            <span class="text-emerald-400 text-[11px] font-bold uppercase tracking-widest">Butuh Rekomendasi Khusus?</span>
            <h3 class="text-xl sm:text-2xl font-black text-white leading-tight">Belum menemukan morph yang Anda cari?</h3>
            <p class="text-slate-400 text-xs sm:text-sm max-w-xl leading-relaxed">
                Tim Valiant Exotics siap membantu mencari gecko sesuai budget, corak, dan proyek breeding Anda.
            </p>
        </div>
        <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics%2C%20saya%20mau%20konsultasi%20pilihan%20gecko" target="_blank"
           class="relative px-7 py-3.5 rounded-2xl bg-emerald-500 hover:bg-emerald-600 active:scale-95 text-white font-bold text-sm transition-all shadow-lg shadow-emerald-500/20 flex items-center gap-2.5 flex-shrink-0">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
            Konsultasi via WhatsApp
        </a>
    </div>
</main>


<!-- FLOATING BUTTONS -->
<a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank"
   class="fixed bottom-6 left-6 z-40 p-3.5 rounded-full bg-emerald-500 hover:bg-emerald-600 active:scale-90 text-white shadow-2xl shadow-emerald-500/25 transition-all duration-200 border border-emerald-400/40">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
</a>

<button id="backToTopBtn" onclick="scrollToTop()"
        class="fixed bottom-6 right-6 z-40 p-3.5 rounded-2xl bg-[#0b1329] hover:bg-slate-800 active:scale-90 text-white shadow-2xl transition-all duration-300 opacity-0 translate-y-10 pointer-events-none focus:outline-none border border-slate-700/50">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
</button>


<!-- FOOTER -->
<footer id="kontak" class="bg-[#0b1329] text-slate-400 pt-14 pb-10 border-t border-white/[0.06] mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center pb-10 border-b border-white/[0.07]">
            <div class="space-y-4 text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-3">
                    <img src="{{ asset('LOGOGECKOFINAL.png') }}" alt="Valiant Exotics" class="w-10 h-10 object-contain">
                    <div>
                        <span class="font-black text-lg text-white leading-none block">VALIANT</span>
                        <span class="font-bold text-[9px] tracking-widest text-slate-500 uppercase">EXOTICS</span>
                    </div>
                </div>
                <p class="text-xs text-slate-500 max-w-xs mx-auto md:mx-0">Thoughtfully bred. Carefully raised. Ready for home.</p>
                <div class="flex items-center justify-center md:justify-start gap-2.5">
                    <a href="https://www.instagram.com/bimavaliant?stkn=b2g5cGg5ZDQzeDFt" target="_blank" rel="noopener"
                       class="group px-3.5 py-2 rounded-xl bg-white/[0.06] hover:bg-rose-600/85 border border-white/[0.08] text-slate-300 hover:text-white text-xs font-semibold flex items-center gap-2 transition-all duration-250 active:scale-95">
                        <svg class="w-3.5 h-3.5 text-rose-400 group-hover:text-white transition" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        Instagram
                    </a>
                    <a href="https://www.tiktok.com/@23vallrt?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener"
                       class="group px-3.5 py-2 rounded-xl bg-white/[0.06] hover:bg-slate-700 border border-white/[0.08] text-slate-300 hover:text-white text-xs font-semibold flex items-center gap-2 transition-all duration-250 active:scale-95">
                        <svg class="w-3.5 h-3.5 text-cyan-400 group-hover:text-white transition" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.98-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.07-1.3 1.8-.24.83-.06 1.78.43 2.46.5.68 1.34 1.08 2.18 1.06 1.05-.01 2.05-.59 2.58-1.5.37-.62.53-1.37.52-2.1-.01-4.92-.01-9.84-.01-14.76z"/></svg>
                        TikTok
                    </a>
                </div>
            </div>
            <div class="space-y-2 text-xs text-center md:text-right">
                <p class="flex items-center justify-center md:justify-end gap-2">
                    <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Purwokerto, Banyumas, Jawa Tengah, Indonesia
                </p>
                <p class="flex items-center justify-center md:justify-end gap-2">
                    <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    Pengiriman live reptile terpercaya se-Indonesia
                </p>
            </div>
        </div>
        <div class="pt-6 text-[11px] text-slate-600">
            <p>© {{ date('Y') }} Valiant Exotics. Live arrival guarantee berlaku sesuai syarat & ketentuan.</p>
        </div>
    </div>
</footer>


<!-- MODAL CARE SHEET -->
<div id="careModal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-md z-50 hidden flex items-center justify-center p-4 transition-opacity duration-300 opacity-0">
    <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] flex flex-col shadow-2xl border border-slate-100 overflow-hidden transform scale-95 opacity-0 modal-spring" id="careModalBox">
        <div class="px-6 py-5 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <div>
                    <h3 class="font-extrabold text-slate-900 text-base">Panduan Perawatan (Care Sheet)</h3>
                    <p class="text-xs text-slate-500">Standar pemeliharaan resmi Valiant Exotics</p>
                </div>
            </div>
            <button onclick="closeCareModal()" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 active:scale-90 text-slate-500 flex items-center justify-center transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <div class="p-6 overflow-y-auto space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 space-y-2">
                <div class="flex items-center gap-2 font-bold text-slate-900 text-sm"><span class="w-2 h-2 rounded-full bg-emerald-500"></span>1. Kandang & Substrat</div>
                <p>Substrat aman: <strong>Paper Towel/Tisu Dapur</strong> atau <strong>Cocopeat lembap</strong> khusus AFT.</p>
            </div>
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 space-y-2">
                <div class="flex items-center gap-2 font-bold text-slate-900 text-sm"><span class="w-2 h-2 rounded-full bg-emerald-500"></span>2. Suhu & Kelembapan</div>
                <ul class="list-disc pl-5 space-y-1"><li><strong>Leopard Gecko:</strong> 28°C–31°C, kelembapan 30%–40%.</li><li><strong>AFT:</strong> Kelembapan 60%–70%, wajib Moist Hide.</li></ul>
            </div>
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 space-y-2">
                <div class="flex items-center gap-2 font-bold text-slate-900 text-sm"><span class="w-2 h-2 rounded-full bg-emerald-500"></span>3. Pakan & Nutrisi</div>
                <p>Jangkrik, Dubia Roach, atau Ulat Hongkong. Dusting <strong>Kalsium + D3</strong> 2–3x/minggu.</p>
            </div>
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 space-y-2">
                <div class="flex items-center gap-2 font-bold text-slate-900 text-sm"><span class="w-2 h-2 rounded-full bg-emerald-500"></span>4. Air Minum & Sanitasi</div>
                <p>Air bersih setiap hari. Ganti substrat minimal 1 minggu sekali.</p>
            </div>
        </div>
        <div class="px-6 py-4 border-t border-slate-100 flex justify-end bg-slate-50/50">
            <button onclick="closeCareModal()" class="px-6 py-2.5 rounded-full bg-[#0b1329] hover:bg-slate-800 active:scale-95 text-white font-semibold text-xs transition">Mengerti & Tutup</button>
        </div>
    </div>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 550, easing: 'ease-out-cubic', once: true, offset: 70 });
</script>

<script>
    function openCareModal() {
        const modal = document.getElementById('careModal');
        const box   = document.getElementById('careModalBox');
        if (!modal || !box) return;
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        requestAnimationFrame(() => {
            modal.classList.remove('opacity-0');
            box.classList.remove('scale-95','opacity-0');
            box.classList.add('scale-100','opacity-100');
        });
    }
    function closeCareModal() {
        const modal = document.getElementById('careModal');
        const box   = document.getElementById('careModalBox');
        if (!modal || !box) return;
        modal.classList.add('opacity-0');
        box.classList.remove('scale-100','opacity-100');
        box.classList.add('scale-95','opacity-0');
        setTimeout(() => { modal.classList.add('hidden'); document.body.classList.remove('overflow-hidden'); }, 280);
    }
    function scrollToTop() { window.scrollTo({ top: 0, behavior: 'smooth' }); }

    document.addEventListener('DOMContentLoaded', function () {
        // Navbar shrink
        const mainHeader = document.getElementById('mainHeader');
        const headerContainer = document.getElementById('headerContainer');
        const logoBox = document.getElementById('logoBox');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 30) {
                mainHeader.classList.add('shadow-md','bg-white/95');
                headerContainer.classList.remove('h-16','sm:h-[72px]');
                headerContainer.classList.add('h-14','sm:h-16');
                logoBox?.classList.remove('w-10','h-10','sm:w-11','sm:h-11');
                logoBox?.classList.add('w-8','h-8','sm:w-9','sm:h-9');
            } else {
                mainHeader.classList.remove('shadow-md','bg-white/95');
                headerContainer.classList.remove('h-14','sm:h-16');
                headerContainer.classList.add('h-16','sm:h-[72px]');
                logoBox?.classList.remove('w-8','h-8','sm:w-9','sm:h-9');
                logoBox?.classList.add('w-10','h-10','sm:w-11','sm:h-11');
            }
        }, { passive: true });

        // Hamburger
        document.getElementById('menuBtn')?.addEventListener('click', () => {
            document.getElementById('mobileMenu')?.classList.toggle('hidden');
        });

        // Back to top
        const backBtn = document.getElementById('backToTopBtn');
        window.addEventListener('scroll', () => {
            if (!backBtn) return;
            if (window.scrollY > 300) {
                backBtn.classList.remove('opacity-0','translate-y-10','pointer-events-none');
                backBtn.classList.add('opacity-100','translate-y-0');
            } else {
                backBtn.classList.remove('opacity-100','translate-y-0');
                backBtn.classList.add('opacity-0','translate-y-10','pointer-events-none');
            }
        }, { passive: true });

        // Filter, search & sort
        const searchInput    = document.getElementById('searchInput');
        const morphFilter    = document.getElementById('morphFilter');
        const sortFilter     = document.getElementById('sortFilter');
        const readyToggleBtn = document.getElementById('readyToggleBtn');
        const readyIndicator = document.getElementById('readyIndicator');
        const geckoGrid      = document.getElementById('geckoGrid');
        const cards          = document.querySelectorAll('.gecko-card');
        const noResults      = document.getElementById('noResults');
        let readyOnly = false;

        readyToggleBtn?.addEventListener('click', function () {
            readyOnly = !readyOnly;
            readyIndicator.classList.toggle('bg-emerald-500', readyOnly);
            readyIndicator.classList.toggle('bg-slate-300', !readyOnly);
            this.classList.toggle('border-emerald-500', readyOnly);
            this.classList.toggle('bg-emerald-50/60', readyOnly);
            applyFilterAndSort();
        });

        function applyFilterAndSort() {
            const query        = searchInput?.value.toLowerCase().trim() || '';
            const selectedMorph = morphFilter?.value.toLowerCase().trim() || '';
            let visible = 0;

            cards.forEach(card => {
                const name   = card.getAttribute('data-name') || '';
                const morph  = card.getAttribute('data-morph') || '';
                const status = card.getAttribute('data-status') || '';
                const ok = (name.includes(query) || morph.includes(query))
                        && (selectedMorph === '' || morph.includes(selectedMorph))
                        && (!readyOnly || status.includes('ready stock'));
                card.classList.toggle('hidden', !ok);
                if (ok) visible++;
            });

            noResults?.classList.toggle('hidden', visible > 0);

            const sortVal = sortFilter?.value || 'default';
            const arr = Array.from(cards);
            arr.sort((a, b) => {
                const pa = parseFloat(a.getAttribute('data-price')) || 0;
                const pb = parseFloat(b.getAttribute('data-price')) || 0;
                return sortVal === 'price-asc' ? pa - pb : sortVal === 'price-desc' ? pb - pa : 0;
            });
            if (geckoGrid) arr.forEach(c => geckoGrid.appendChild(c));
        }

        searchInput?.addEventListener('input', applyFilterAndSort);
        morphFilter?.addEventListener('change', applyFilterAndSort);
        sortFilter?.addEventListener('change', applyFilterAndSort);

        document.getElementById('careModal')?.addEventListener('click', function(e) {
            if (e.target === this) closeCareModal();
        });
    });
</script>
</body>
</html>
