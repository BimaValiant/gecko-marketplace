<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valiant Exotics – Koleksi Leopard Gecko Berkualitas</title>
    <link rel="icon" type="image/png" href="{{ asset('LOGOGECKOFINAL.png') }}">

    <meta property="og:title" content="Valiant Exotics – Koleksi Leopard Gecko Berkualitas">
    <meta property="og:description" content="Breeding with intention. Temukan Leopard Gecko & AFT berkualitas, sehat, dan terawat dengan Garansi Live Arrival 100%.">
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

        /* ── HERO LOAD ANIMATIONS ───────────────────────── */
        @keyframes fadeSlideUp {
            from { opacity: 0; transform: translateY(18px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .hero-anim-1 { animation: fadeSlideUp 0.55s cubic-bezier(0.16,1,0.3,1) both; }
        .hero-anim-2 { animation: fadeSlideUp 0.55s cubic-bezier(0.16,1,0.3,1) 0.10s both; }
        .hero-anim-3 { animation: fadeSlideUp 0.55s cubic-bezier(0.16,1,0.3,1) 0.18s both; }
        .hero-anim-4 { animation: fadeSlideUp 0.55s cubic-bezier(0.16,1,0.3,1) 0.26s both; }
        .hero-anim-5 { animation: fadeSlideUp 0.55s cubic-bezier(0.16,1,0.3,1) 0.34s both; }

        /* ── SKELETON SHIMMER ───────────────────────────── */
        @keyframes skeletonWave {
            0%   { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        .skeleton-shimmer {
            background: linear-gradient(90deg,#f1f5f9 25%,#e2e8f0 50%,#f1f5f9 75%);
            background-size: 200% 100%;
            animation: skeletonWave 2s infinite ease-in-out;
        }

        /* ── SHIMMER ON BADGE ───────────────────────────── */
        @keyframes shimmerGlow {
            0%   { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        .badge-shimmer {
            position: relative;
            overflow: hidden;
        }
        .badge-shimmer::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(16,185,129,0.22), transparent);
            transform: translateX(-100%);
            animation: shimmerGlow 3s infinite ease-in-out;
        }

        /* ── CSS GRID ACCORDION (hardware-accelerated) ─── */
        .faq-grid-wrapper {
            display: grid;
            grid-template-rows: 0fr;
            transition: grid-template-rows 320ms cubic-bezier(0.16,1,0.3,1);
        }
        .faq-grid-wrapper.is-open { grid-template-rows: 1fr; }
        .faq-grid-content { overflow: hidden; }

        /* ── SPRING MODAL ───────────────────────────────── */
        .modal-spring {
            transition: transform 300ms cubic-bezier(0.16,1,0.3,1),
                        opacity  300ms cubic-bezier(0.16,1,0.3,1);
        }

        /* ── PRODUCT CARD ───────────────────────────────── */
        .gecko-card {
            transition: box-shadow 300ms ease, transform 280ms cubic-bezier(0.16,1,0.3,1);
            will-change: transform;
        }
        .gecko-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(15,23,42,0.10);
        }
        .gecko-card:active { transform: scale(0.97); }

        /* ── PROMISE CARD ───────────────────────────────── */
        .promise-card {
            transition: background 250ms ease, transform 250ms ease;
        }
        .promise-card:hover {
            background: rgba(255,255,255,0.08);
            transform: translateY(-2px);
        }

        /* ── TESTI CARD ─────────────────────────────────── */
        .testi-card {
            transition: box-shadow 280ms ease, transform 280ms ease;
        }
        .testi-card:hover {
            box-shadow: 0 12px 32px -8px rgba(15,23,42,0.09);
            transform: translateY(-3px);
        }

        /* ── HERO GLOW ──────────────────────────────────── */
        .hero-radial {
            background-image: radial-gradient(ellipse 70% 50% at 50% -5%, rgba(16,185,129,0.09), transparent 65%);
        }

        /* ── DECORATIVE DOT GRID ────────────────────────── */
        .dot-grid {
            background-image: radial-gradient(circle, rgba(148,163,184,0.25) 1px, transparent 1px);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white overflow-x-hidden">

<!-- ══════════════════════════════════════════════════════════
     NAVBAR — Glassmorphic sticky, shrinks on scroll
═══════════════════════════════════════════════════════════ -->
<header id="mainHeader" class="w-full bg-white/85 backdrop-blur-xl sticky top-0 z-50 border-b border-slate-200/60 shadow-[0_1px_0_rgba(0,0,0,0.04)] transition-all duration-300">
    <div id="headerContainer" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-[72px] flex items-center justify-between transition-all duration-300">

        <!-- Brand -->
        <a href="{{ route('landing') }}" class="flex items-center gap-2.5 sm:gap-3 group flex-shrink-0">
            <div id="logoBox" class="w-10 h-10 sm:w-11 sm:h-11 flex-shrink-0 transition-all duration-300">
                <img src="{{ asset('LOGOGECKOFINAL.png') }}" alt="Valiant Exotics" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="flex flex-col leading-none">
                <span class="font-black text-[15px] sm:text-lg tracking-tight text-slate-900">VALIANT</span>
                <span class="font-bold text-[8px] sm:text-[9px] tracking-[0.2em] text-slate-400 uppercase mt-0.5">EXOTICS</span>
            </div>
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-8 text-[13px] font-semibold text-slate-500">
            <a href="{{ route('katalog') }}" class="hover:text-slate-900 transition-colors duration-200">Katalog</a>
            <button onclick="openCareModal()" class="hover:text-slate-900 transition-colors duration-200">Perawatan</button>
            <a href="#faq" class="hover:text-slate-900 transition-colors duration-200">FAQ & Garansi</a>
            <a href="#kontak" class="hover:text-slate-900 transition-colors duration-200">Kontak</a>
        </nav>

        <!-- Right actions -->
        <div class="flex items-center gap-2.5">
            <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank"
               class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-600 hover:bg-emerald-700 active:scale-95 text-white text-[13px] font-semibold transition-all duration-150 shadow-sm shadow-emerald-600/20">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                Hubungi Kami
            </a>
            <button id="menuBtn" class="md:hidden p-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 active:scale-95 text-slate-700 transition focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden border-t border-slate-100 bg-white/95 px-5 py-4 space-y-1 shadow-lg">
        <a href="{{ route('katalog') }}" class="block px-3 py-2.5 rounded-xl font-bold text-emerald-600 text-sm">Katalog Lengkap</a>
        <button onclick="openCareModal()" class="block w-full text-left px-3 py-2.5 rounded-xl font-semibold text-slate-700 text-sm hover:bg-slate-50">Perawatan Gecko</button>
        <a href="#faq" class="block px-3 py-2.5 rounded-xl font-semibold text-slate-700 text-sm hover:bg-slate-50">FAQ & Garansi</a>
        <a href="#kontak" class="block px-3 py-2.5 rounded-xl font-semibold text-slate-700 text-sm hover:bg-slate-50">Kontak</a>
        <div class="pt-2">
            <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank"
               class="w-full py-3 rounded-2xl bg-emerald-600 hover:bg-emerald-700 active:scale-95 text-white text-sm font-bold flex items-center justify-center gap-2 transition">
                Hubungi Kami via WhatsApp
            </a>
        </div>
    </div>
</header>


<!-- ══════════════════════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════════════════════ -->
<section class="relative hero-radial overflow-hidden">
    <!-- Decorative dot grid top-right -->
    <div class="absolute top-0 right-0 w-64 h-64 dot-grid opacity-60 pointer-events-none" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-20 lg:py-24 grid grid-cols-1 md:grid-cols-12 gap-10 lg:gap-16 items-center">

        <!-- Text Column -->
        <div class="md:col-span-7 space-y-5 text-center md:text-left">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-500/25 text-emerald-700 text-[11px] font-bold tracking-widest uppercase badge-shimmer shadow-sm hero-anim-1">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse flex-shrink-0"></span>
                Breeding with Intention
            </div>

            <!-- Heading -->
            <h1 class="hero-anim-2 text-[2.2rem] sm:text-5xl lg:text-[3.5rem] font-black tracking-tight text-slate-900 leading-[1.1]">
                Gecko pilihan,<br>
                <span class="text-emerald-600">tangan terpercaya.</span>
            </h1>

            <p class="hero-anim-3 text-slate-500 text-sm sm:text-base lg:text-[1.05rem] max-w-xl mx-auto md:mx-0 leading-relaxed">
                Temukan companion eksotis yang sehat, captive-bred, dan dirawat dengan penuh perhatian — tiba aman ke seluruh Indonesia.
            </p>

            <!-- CTAs -->
            <div class="hero-anim-4 flex flex-col sm:flex-row items-center justify-center md:justify-start gap-3 pt-1">
                <a href="#katalog"
                   class="w-full sm:w-auto px-7 py-3.5 rounded-2xl bg-[#0b1329] hover:bg-slate-800 active:scale-95 text-white font-bold text-sm transition-all duration-150 shadow-sm shadow-slate-900/15 flex items-center justify-center gap-2 group">
                    Lihat Koleksi Pilihan
                    <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </a>
                <button onclick="openCareModal()"
                        class="w-full sm:w-auto px-7 py-3.5 rounded-2xl bg-white hover:bg-slate-50 active:scale-95 text-slate-700 border border-slate-200 font-semibold text-sm transition-all duration-150 flex items-center justify-center gap-2">
                    Cara Kami Merawat
                </button>
            </div>

            <!-- Stats strip -->
            <div class="hero-anim-5 pt-5 border-t border-slate-200/70 grid grid-cols-3 gap-3 max-w-sm mx-auto md:mx-0">
                <div class="text-center md:text-left">
                    <span class="block text-xl sm:text-2xl font-black text-slate-900">1+</span>
                    <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide">Thn pengalaman</span>
                </div>
                <div class="text-center md:text-left border-x border-slate-200">
                    <span class="block text-xl sm:text-2xl font-black text-emerald-600">100%</span>
                    <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide">Live arrival</span>
                </div>
                <div class="text-center md:text-left">
                    <span class="block text-xl sm:text-2xl font-black text-slate-900">5/5</span>
                    <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide">Rating keeper</span>
                </div>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="md:col-span-5 relative max-w-sm mx-auto md:max-w-none w-full" data-aos="fade-left" data-aos-duration="600">
            <div class="group relative rounded-[2rem] overflow-hidden shadow-2xl shadow-slate-900/12 aspect-[4/5] bg-slate-200 border border-slate-200/60 transform-gpu will-change-transform">
                <img src="https://community.morphmarket.com/uploads/db1442/original/3X/2/1/21b5fdab97e71256d528504c382e701f080553c5.jpeg"
                     alt="Featured Gecko"
                     class="w-full h-full object-cover group-hover:scale-[1.04] transition-transform duration-700 ease-out">

                <!-- Overlay glass tag -->
                <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-5"
                     style="background: linear-gradient(to top, rgba(11,19,41,0.75) 0%, transparent 100%);">
                    <span class="block text-[9px] uppercase tracking-widest font-bold text-emerald-400 mb-0.5">Featured Morph</span>
                    <span class="font-extrabold text-sm sm:text-base text-white">Leopard Gecko Black Night</span>
                </div>
            </div>

            <!-- Floating badge -->
            <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 bg-white rounded-2xl shadow-xl border border-slate-100 px-3.5 py-2.5 text-center hidden sm:block">
                <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider">Garansi</span>
                <span class="block font-black text-[15px] text-emerald-600 leading-none mt-0.5">100%</span>
                <span class="block text-[10px] font-semibold text-slate-400">Live Arrival</span>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     KATALOG SECTION (Preview)
═══════════════════════════════════════════════════════════ -->
<section id="katalog" class="bg-white py-14 sm:py-20 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4 text-center md:text-left" data-aos="fade-up" data-aos-duration="500">
            <div>
                <span class="text-[11px] font-bold tracking-widest text-emerald-600 uppercase block mb-2">Featured Collection</span>
                <h2 class="text-2xl sm:text-4xl font-black tracking-tight text-slate-900 leading-tight">Koleksi Pilihan Terbaru</h2>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-3">
                <p class="text-xs sm:text-sm text-slate-400 max-w-sm mx-auto md:mx-0 leading-relaxed">
                    Setiap individu dipilih dan dirawat untuk membawa kualitas terbaik ke habitat barunya.
                </p>
                <a href="{{ route('katalog') }}" class="hidden sm:inline-flex items-center gap-1.5 text-xs font-bold text-emerald-600 hover:text-emerald-700 active:scale-95 transition-all flex-shrink-0 group whitespace-nowrap">
                    Katalog Lengkap
                    <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        <!-- Grid -->
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
                 data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ ($loop->index % 4) * 70 }}"
                 data-name="{{ strtolower($codeName) }}"
                 data-morph="{{ strtolower($morph) }}"
                 data-status="{{ strtolower($status) }}"
                 data-price="{{ $price }}">

                <!-- Image -->
                <a href="{{ route('gecko.show', $id) }}" class="block relative aspect-[4/3] bg-slate-100 overflow-hidden skeleton-shimmer">
                    <img src="{{ \Illuminate\Support\Str::startsWith($gecko['image'] ?? $gecko->image, 'http') ? ($gecko['image'] ?? $gecko->image) : asset('storage/' . ($gecko['image'] ?? $gecko->image)) }}"
                         alt="{{ $morph }}" loading="lazy"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">
                    <!-- Status badge -->
                    <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-full text-[9px] sm:text-[10px] font-bold tracking-wider backdrop-blur-sm {{ $status === 'READY STOCK' ? 'bg-emerald-500/90 text-white border border-emerald-400/30' : 'bg-slate-900/80 text-slate-200 border border-white/15' }}">
                        {{ $status }}
                    </span>
                </a>

                <!-- Body -->
                <div class="p-3 sm:p-4 flex flex-col flex-1 gap-1.5">
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-400 truncate">{{ $codeName }}</span>
                    <a href="{{ route('gecko.show', $id) }}" class="font-bold text-xs sm:text-[15px] text-slate-900 group-hover:text-emerald-600 transition-colors duration-200 leading-snug line-clamp-2">
                        {{ $morph }}
                    </a>

                    <div class="flex flex-wrap gap-1 mt-0.5">
                        <span class="px-1.5 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[9px] sm:text-[11px] font-semibold">{{ $gecko['gender'] ?? $gecko->gender }}</span>
                        <span class="px-1.5 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[9px] sm:text-[11px] font-semibold">{{ $gecko['age'] ?? $gecko->age }}</span>
                        <span class="hidden sm:inline-block px-1.5 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[11px] font-semibold">{{ $gecko['feeding'] ?? $gecko->feeding }}</span>
                    </div>

                    <div class="mt-auto pt-2 flex items-center justify-between gap-2">
                        <span class="text-xs sm:text-base font-black text-slate-900">Rp {{ number_format($price, 0, ',', '.') }}</span>
                        <a href="{{ route('gecko.show', $id) }}"
                           class="flex-shrink-0 px-3 py-1.5 rounded-xl bg-[#0b1329] hover:bg-slate-800 active:scale-95 text-white font-bold text-[10px] sm:text-xs transition-all duration-150 flex items-center gap-1.5">
                            Detail
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-12 text-center">
                <p class="text-slate-400 text-sm">Belum ada gecko pilihan yang ditampilkan.</p>
            </div>
            @endforelse
        </div>

        <!-- CTA Lihat Semua -->
        <div class="mt-10 sm:mt-14 text-center" data-aos="fade-up" data-aos-duration="500">
            <a href="{{ route('katalog') }}"
               class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-2xl bg-[#0b1329] hover:bg-slate-800 active:scale-95 text-white font-bold text-sm shadow-lg shadow-slate-900/10 hover:shadow-xl transition-all duration-200 group">
                Lihat Semua Produk ({{ $totalGeckos ?? count($geckos) }} Gecko)
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <p class="text-slate-400 text-xs mt-2.5">Tersedia filter morph, sortir harga, dan live search di katalog lengkap</p>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     PROMISE SECTION — Dark Navy (1 dark section = visual break)
═══════════════════════════════════════════════════════════ -->
<section id="perawatan" class="bg-[#0b1329] py-14 sm:py-20 relative overflow-hidden">
    <!-- Decorative glow -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] pointer-events-none"
         style="background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(16,185,129,0.12), transparent 70%);" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">

        <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="500">
            <span class="text-[11px] font-bold tracking-widest text-emerald-500 uppercase">Our Promise</span>
            <h2 class="text-2xl sm:text-4xl font-black tracking-tight text-white mt-2 leading-tight">
                Tenang memilih,<br class="sm:hidden"> nyaman memelihara.
            </h2>
            <p class="text-slate-400 text-sm max-w-lg mx-auto mt-3 leading-relaxed">
                Kami percaya pengalaman memelihara dimulai jauh sebelum gecko sampai di rumah.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-5">
            <!-- Promise 1 -->
            <div class="promise-card bg-white/[0.05] border border-white/[0.08] rounded-2xl p-6 space-y-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="80">
                <div class="w-10 h-10 rounded-2xl bg-emerald-500/15 flex items-center justify-center">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-white text-sm">Aman & Legal</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Dokumentasi jelas dan pengiriman aman khusus hewan hidup.</p>
            </div>

            <!-- Promise 2 -->
            <div class="promise-card bg-white/[0.05] border border-white/[0.08] rounded-2xl p-6 space-y-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="160">
                <div class="w-10 h-10 rounded-2xl bg-emerald-500/15 flex items-center justify-center">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <h3 class="font-bold text-white text-sm">Genetik Terjaga</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Breeding terencana dengan lineage dan kesehatan terpantau.</p>
            </div>

            <!-- Promise 3 -->
            <div class="promise-card bg-white/[0.05] border border-white/[0.08] rounded-2xl p-6 space-y-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="240">
                <div class="w-10 h-10 rounded-2xl bg-emerald-500/15 flex items-center justify-center">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                </div>
                <h3 class="font-bold text-white text-sm">Selalu Dibantu</h3>
                <p class="text-slate-400 text-xs leading-relaxed">Konsultasi gratis dari setup habitat hingga feeding harian.</p>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════════════════════ -->
<section class="bg-slate-50 py-14 sm:py-20 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center space-y-2 mb-10" data-aos="fade-up" data-aos-duration="500">
            <span class="text-[11px] font-bold tracking-widest text-emerald-600 uppercase">Testimonials</span>
            <h2 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight">Kata Mereka yang Sudah Mengadopsi</h2>
            <p class="text-xs sm:text-sm text-slate-400 max-w-md mx-auto leading-relaxed">
                Kepuasan para adopter saat menerima koleksi gecko dari Valiant Exotics.
            </p>
            <div class="pt-3">
                <button type="button" onclick="openTestiModal()"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-emerald-600 hover:bg-emerald-700 active:scale-95 text-white font-bold text-xs transition-all shadow-sm">
                    ✍️ Tulis Ulasan Kamu
                </button>
            </div>
        </div>

        @if(session('success_testi'))
        <div class="max-w-xl mx-auto mb-8 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-medium text-center">
            {{ session('success_testi') }}
        </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
            @forelse($testimonials as $testi)
            <div class="testi-card bg-white rounded-2xl sm:rounded-3xl border border-slate-100 shadow-sm p-5 sm:p-6 flex flex-col justify-between space-y-4"
                 data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ ($loop->index % 3) * 90 }}">
                <div class="space-y-3">
                    <div class="flex items-center gap-0.5 text-amber-400 text-sm">
                        @for($i = 0; $i < $testi->rating; $i++) ★ @endfor
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">"{{ $testi->review }}"</p>
                </div>
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-slate-900">{{ $testi->client_name }}</h4>
                        <span class="text-[10px] text-slate-400 block mt-0.5">{{ $testi->city ?? 'Purwokerto' }}</span>
                    </div>
                    @if($testi->morph_adopted)
                    <span class="px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 text-[10px] font-bold border border-emerald-100">
                        {{ $testi->morph_adopted }}
                    </span>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-8 text-slate-400 italic text-xs">
                Belum ada ulasan. Klik tombol di atas untuk jadi yang pertama!
            </div>
            @endforelse
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     FAQ & GARANSI
═══════════════════════════════════════════════════════════ -->
<section id="faq" class="bg-white py-14 sm:py-20 border-t border-slate-100">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">

        <div class="text-center space-y-2 mb-10" data-aos="fade-up" data-aos-duration="500">
            <span class="text-[11px] font-bold tracking-widest text-emerald-600 uppercase">Information Center</span>
            <h2 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight">FAQ & Syarat Garansi</h2>
            <p class="text-xs sm:text-sm text-slate-400">Hal penting seputar transaksi, pengiriman, dan pemeliharaan.</p>
        </div>

        <div class="space-y-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="80">

            @php
            $faqs = [
                ['q' => 'Bagaimana Alur Pemesanan Hewan di Website Ini?', 'a' => 'Pilih unit gecko/AFT di katalog → Klik tombol <strong>"Lihat Detail & Adopsi"</strong> → Anda akan terhubung ke WhatsApp kami dengan format pesan otomatis → Konfirmasi ketersediaan & pembayaran → Hewan siap dikirim.'],
                ['q' => 'Metode Pembayaran Apa Saja yang Diterima?', 'a' => 'Kami menerima <strong>Transfer Bank Resmi</strong>, <strong>E-Wallet</strong> (DANA, OVO, GoPay, ShopeePay), serta <strong>Cash</strong> khusus COD di area Purwokerto.'],
                ['q' => 'Hari Apa Saja Jadwal Pengiriman Hewan Diterapkan?', 'a' => 'Pengiriman luar kota hanya dilakukan hari <strong>Senin sampai Kamis</strong> untuk mencegah paket hewan tertahan di gudang ekspedisi saat akhir pekan.'],
                ['q' => 'Jalur Pengiriman Apa Saja yang Digunakan?', 'a' => 'Kami melayani pengiriman ke seluruh Pulau Jawa dan luar pulau via <strong>TIKI ONS, JNE YES, KAI Logistik</strong>, serta Travel/Ojol untuk area lokal.'],
                ['q' => 'Bagaimana Syarat Klaim Garansi 100% Live Arrival?', 'a' => 'Garansi berlaku jika Anda menyertakan <strong>video unboxing tanpa cut/edit</strong> dari awal pembukaan paket. Video wajib dikirimkan maksimal 2 jam setelah paket diterima.'],
                ['q' => 'Bagaimana Jika Ekor Gecko Putus (Autotomy) Saat Pengiriman?', 'a' => 'Kami memberikan <strong>refund 25% dari harga gecko</strong> (atau opsi pertukaran unit) dengan syarat melampirkan video unboxing utuh.'],
                ['q' => 'Bagaimana Jika Jenis Kelamin (Sexing) Tidak Sesuai Saat Dewasa?', 'a' => 'Untuk kelas Adult/Proven, sexing dijamin <strong>100% akurat</strong>. Untuk Baby/Juvenile, sexing bersifat estimasi (TSL/TSM). Jika terjadi kesalahan pada unit bernomor sertifikat, kami siap memberikan solusi.'],
                ['q' => 'Apakah Setiap Adopsi Mendapatkan Data Lineage (Silsilah Genetik)?', 'a' => 'Ya, khusus morph premium Leopard Gecko dan seluruh varian AFT akan mendapatkan <strong>data lineage</strong> berisi silsilah indukan, tanggal menetas, serta informasi genetik bawaan (het).'],
                ['q' => 'Apakah Bisa Menahan (Hold/DP) Gecko Terlebih Dahulu?', 'a' => 'Bisa. Booking/hold dengan <strong>DP minimal 40%</strong> dari harga deal. Masa hold berlaku 7–14 hari. <em class="text-slate-600">Catatan: DP hangus jika pembeli membatalkan sepihak.</em>'],
                ['q' => 'Apakah Pemula Boleh Konsultasi Setelah Mengadopsi?', 'a' => 'Tentu! Kami menyediakan <strong>layanan konsultasi gratis seumur hidup</strong> via WhatsApp untuk setup kandang, jadwal makan, hingga penanganan shedding.'],
                ['q' => 'Apakah Bisa Pantau Langsung / COD ke Lokasi?', 'a' => 'Bisa! Untuk wilayah <strong>Purwokerto dan sekitarnya</strong>, Anda dapat COD di titik temu atau datang langsung dengan janji temu terlebih dahulu.'],
            ];
            @endphp

            @foreach($faqs as $faq)
            <div class="bg-slate-50 rounded-2xl border border-slate-200/70 overflow-hidden">
                <button type="button" class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn select-none gap-4">
                    <span>{{ $faq['q'] }}</span>
                    <div class="w-7 h-7 rounded-full bg-white border border-slate-200 flex items-center justify-center flex-shrink-0 faq-icon-box transition-all duration-200">
                        <svg class="w-4 h-4 text-slate-500 transition-transform duration-300 ease-out faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </button>
                <div class="faq-grid-wrapper">
                    <div class="faq-grid-content">
                        <div class="px-5 pb-4 pt-1 text-xs sm:text-sm text-slate-500 leading-relaxed border-t border-slate-200/70">
                            {!! $faq['a'] !!}
                            @if(str_contains($faq['q'], 'COD'))
                            <div class="pt-3">
                                <a href="https://maps.app.goo.gl/aUuBKzp6oXig4tR89" target="_blank"
                                   class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-emerald-50 text-emerald-700 hover:bg-emerald-100 active:scale-95 font-semibold text-xs transition border border-emerald-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Lihat Lokasi di Google Maps
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════════════════════
     FLOATING BUTTONS
═══════════════════════════════════════════════════════════ -->
<a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank"
   class="fixed bottom-6 left-6 z-40 p-3.5 rounded-full bg-emerald-500 hover:bg-emerald-600 active:scale-90 text-white shadow-2xl shadow-emerald-500/30 transition-all duration-200 flex items-center justify-center border border-emerald-400/40">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
</a>

<button id="backToTopBtn" onclick="scrollToTop()"
        class="fixed bottom-6 right-6 z-40 p-3.5 rounded-2xl bg-[#0b1329] hover:bg-slate-800 active:scale-90 text-white shadow-2xl transition-all duration-300 opacity-0 translate-y-10 pointer-events-none focus:outline-none border border-slate-700/50">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
</button>


<!-- ══════════════════════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════════════════════ -->
<footer id="kontak" class="bg-[#0b1329] text-slate-400 pt-14 pb-10 border-t border-white/[0.06]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 pb-10 border-b border-white/[0.07]">

            <!-- Brand -->
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('LOGOGECKOFINAL.png') }}" alt="Valiant Exotics" class="w-10 h-10 object-contain">
                    <div>
                        <span class="font-black text-lg text-white leading-none block">VALIANT</span>
                        <span class="font-bold text-[9px] tracking-widest text-slate-500 uppercase">EXOTICS</span>
                    </div>
                </div>
                <p class="text-xs text-slate-500 leading-relaxed max-w-xs">
                    Thoughtfully bred. Carefully raised. Ready for home.
                </p>
                <div class="flex items-center gap-2.5">
                    <a href="https://www.instagram.com/bimavaliant?stkn=b2g5cGg5ZDQzeDFt" target="_blank" rel="noopener"
                       class="group px-3.5 py-2 rounded-xl bg-white/[0.06] hover:bg-rose-600/85 border border-white/[0.08] hover:border-rose-500/40 text-slate-300 hover:text-white text-xs font-semibold flex items-center gap-2 transition-all duration-250 active:scale-95">
                        <svg class="w-3.5 h-3.5 text-rose-400 group-hover:text-white transition" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        Instagram
                    </a>
                    <a href="https://www.tiktok.com/@23vallrt?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener"
                       class="group px-3.5 py-2 rounded-xl bg-white/[0.06] hover:bg-slate-700 border border-white/[0.08] hover:border-cyan-500/40 text-slate-300 hover:text-white text-xs font-semibold flex items-center gap-2 transition-all duration-250 active:scale-95">
                        <svg class="w-3.5 h-3.5 text-cyan-400 group-hover:text-white transition" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.98-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.07-1.3 1.8-.24.83-.06 1.78.43 2.46.5.68 1.34 1.08 2.18 1.06 1.05-.01 2.05-.59 2.58-1.5.37-.62.53-1.37.52-2.1-.01-4.92-.01-9.84-.01-14.76z"/></svg>
                        TikTok
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h4 class="font-bold text-white text-sm">Navigasi</h4>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="{{ route('katalog') }}" class="text-slate-400 hover:text-white transition-colors duration-200">Katalog Gecko</a></li>
                    <li><button onclick="openCareModal()" class="text-slate-400 hover:text-white transition-colors duration-200">Panduan Perawatan</button></li>
                    <li><a href="#faq" class="text-slate-400 hover:text-white transition-colors duration-200">FAQ & Garansi</a></li>
                    <li><a href="https://wa.me/6285923568144" target="_blank" class="text-slate-400 hover:text-white transition-colors duration-200">Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="space-y-4">
                <h4 class="font-bold text-white text-sm">Lokasi & Kontak</h4>
                <div class="space-y-2.5 text-xs text-slate-400">
                    <p class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        Purwokerto, Banyumas, Jawa Tengah, Indonesia
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Pengiriman live reptile terpercaya se-Indonesia
                    </p>
                </div>
                <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank"
                   class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 active:scale-95 text-white font-bold text-xs transition-all shadow-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    Chat WhatsApp
                </a>
            </div>
        </div>

        <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-[11px] text-slate-600">
            <p>© {{ date('Y') }} Valiant Exotics. Live arrival guarantee berlaku sesuai syarat & ketentuan.</p>
            <a href="{{ route('landing') }}" class="text-slate-500 hover:text-white transition-colors duration-200">Kembali ke atas ↑</a>
        </div>
    </div>
</footer>


<!-- ══════════════════════════════════════════════════════════
     MODAL: CARE SHEET
═══════════════════════════════════════════════════════════ -->
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
            <button onclick="closeCareModal()" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 active:scale-90 text-slate-500 hover:text-slate-900 flex items-center justify-center transition focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <div class="p-6 sm:p-8 overflow-y-auto space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 space-y-2">
                <div class="flex items-center gap-2 font-bold text-slate-900 text-sm"><span class="w-2 h-2 rounded-full bg-emerald-500"></span>1. Kandang & Substrat (Habitat)</div>
                <p>Gunakan wadah soliter berbahan plastik atau akuarium kaca. Substrat aman: <strong>Paper Towel/Tisu Dapur</strong> atau <strong>Cocopeat lembap</strong> khusus AFT.</p>
            </div>
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 space-y-2">
                <div class="flex items-center gap-2 font-bold text-slate-900 text-sm"><span class="w-2 h-2 rounded-full bg-emerald-500"></span>2. Suhu & Kelembapan</div>
                <ul class="list-disc pl-5 space-y-1">
                    <li><strong>Leopard Gecko:</strong> Suhu ideal 28°C–31°C, kelembapan 30%–40%.</li>
                    <li><strong>African Fat-Tailed (AFT):</strong> Kelembapan 60%–70%. Wajib sediakan <em>Moist Hide</em>.</li>
                </ul>
            </div>
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 space-y-2">
                <div class="flex items-center gap-2 font-bold text-slate-900 text-sm"><span class="w-2 h-2 rounded-full bg-emerald-500"></span>3. Pakan & Nutrisi</div>
                <p>Beri <strong>Jangkrik, Dubia Roach, atau Ulat Hongkong</strong>. Lakukan <em>dusting</em> bubuk <strong>Kalsium + D3</strong> 2–3x seminggu.</p>
            </div>
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 space-y-2">
                <div class="flex items-center gap-2 font-bold text-slate-900 text-sm"><span class="w-2 h-2 rounded-full bg-emerald-500"></span>4. Air Minum & Sanitasi</div>
                <p>Sediakan wadah minum dangkal berisi air bersih setiap hari. Bersihkan kotoran secara berkala dan ganti substrat minimal 1 minggu sekali.</p>
            </div>
        </div>
        <div class="px-6 py-4 border-t border-slate-100 flex justify-end bg-slate-50/50">
            <button onclick="closeCareModal()" class="px-6 py-2.5 rounded-full bg-[#0b1329] hover:bg-slate-800 active:scale-95 text-white font-semibold text-xs transition shadow-sm">
                Mengerti & Tutup
            </button>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════════════════
     MODAL: TULIS TESTIMONI
═══════════════════════════════════════════════════════════ -->
<div id="testiModal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-md z-50 hidden flex items-center justify-center p-4 transition-opacity duration-300 opacity-0">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 space-y-4 shadow-2xl border border-slate-100 transform scale-95 opacity-0 modal-spring" id="testiModalBox">
        <div class="flex justify-between items-center border-b border-slate-100 pb-3">
            <h3 class="font-extrabold text-slate-900 text-base">Tulis Ulasan Adopsi</h3>
            <button type="button" onclick="closeTestiModal()" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-900 transition">✕</button>
        </div>
        <form action="{{ route('testimonial.public.store') }}" method="POST" class="space-y-3.5 text-xs">
            @csrf
            <div>
                <label class="block font-semibold text-slate-700 mb-1">Nama Kamu *</label>
                <input type="text" name="client_name" required placeholder="Contoh: Dimas R." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 outline-none transition">
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block font-semibold text-slate-700 mb-1">Kota / Lokasi</label>
                    <input type="text" name="city" placeholder="Purwokerto" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 outline-none transition">
                </div>
                <div>
                    <label class="block font-semibold text-slate-700 mb-1">Morph yang Diadopsi</label>
                    <input type="text" name="morph_adopted" placeholder="DB Raptor" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 outline-none transition">
                </div>
            </div>
            <div>
                <label class="block font-semibold text-slate-700 mb-1">Rating Bintang *</label>
                <select name="rating" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 outline-none bg-white transition">
                    <option value="5">⭐⭐⭐⭐⭐ (5 Bintang)</option>
                    <option value="4">⭐⭐⭐⭐ (4 Bintang)</option>
                    <option value="3">⭐⭐⭐ (3 Bintang)</option>
                </select>
            </div>
            <div>
                <label class="block font-semibold text-slate-700 mb-1">Isi Ulasan *</label>
                <textarea name="review" required rows="3" placeholder="Ceritakan kondisi gecko saat sampai, respon admin..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 outline-none transition"></textarea>
            </div>
            <div class="pt-1 flex justify-end gap-2">
                <button type="button" onclick="closeTestiModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 active:scale-95 text-slate-700 font-semibold transition">Batal</button>
                <button type="submit" class="px-5 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 active:scale-95 text-white font-bold transition shadow-sm">Kirim Ulasan</button>
            </div>
        </form>
    </div>
</div>


<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 550, easing: 'ease-out-cubic', once: true, offset: 70 });
</script>

<!-- INTERACTIONS -->
<script>
    // ── MODALS ──────────────────────────────────────────────
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
    function openTestiModal() {
        const modal = document.getElementById('testiModal');
        const box   = document.getElementById('testiModalBox');
        if (!modal || !box) return;
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        requestAnimationFrame(() => {
            modal.classList.remove('opacity-0');
            box.classList.remove('scale-95','opacity-0');
            box.classList.add('scale-100','opacity-100');
        });
    }
    function closeTestiModal() {
        const modal = document.getElementById('testiModal');
        const box   = document.getElementById('testiModalBox');
        if (!modal || !box) return;
        modal.classList.add('opacity-0');
        box.classList.remove('scale-100','opacity-100');
        box.classList.add('scale-95','opacity-0');
        setTimeout(() => { modal.classList.add('hidden'); document.body.classList.remove('overflow-hidden'); }, 280);
    }

    function scrollToTop() { window.scrollTo({ top: 0, behavior: 'smooth' }); }

    document.addEventListener('DOMContentLoaded', function () {

        // ── NAVBAR SHRINK ──────────────────────────────────
        const mainHeader      = document.getElementById('mainHeader');
        const headerContainer = document.getElementById('headerContainer');
        const logoBox         = document.getElementById('logoBox');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 30) {
                mainHeader.classList.add('shadow-md','bg-white/95');
                headerContainer.classList.remove('h-16','sm:h-[72px]');
                headerContainer.classList.add('h-14','sm:h-16');
                if (logoBox) {
                    logoBox.classList.remove('w-10','h-10','sm:w-11','sm:h-11');
                    logoBox.classList.add('w-8','h-8','sm:w-9','sm:h-9');
                }
            } else {
                mainHeader.classList.remove('shadow-md','bg-white/95');
                headerContainer.classList.remove('h-14','sm:h-16');
                headerContainer.classList.add('h-16','sm:h-[72px]');
                if (logoBox) {
                    logoBox.classList.remove('w-8','h-8','sm:w-9','sm:h-9');
                    logoBox.classList.add('w-10','h-10','sm:w-11','sm:h-11');
                }
            }
        }, { passive: true });

        // ── HAMBURGER ─────────────────────────────────────
        document.getElementById('menuBtn')?.addEventListener('click', () => {
            document.getElementById('mobileMenu')?.classList.toggle('hidden');
        });

        // ── BACK TO TOP ───────────────────────────────────
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

        // ── FAQ ACCORDION ─────────────────────────────────
        document.querySelectorAll('.faq-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const wrapper = this.nextElementSibling;
                const icon    = this.querySelector('.faq-icon');
                const iconBox = this.querySelector('.faq-icon-box');
                if (!wrapper) return;
                const isOpen = wrapper.classList.contains('is-open');
                wrapper.classList.toggle('is-open');
                if (isOpen) {
                    icon?.classList.remove('rotate-180');
                    iconBox?.classList.remove('bg-emerald-50','border-emerald-200');
                    iconBox?.classList.add('bg-white','border-slate-200');
                } else {
                    icon?.classList.add('rotate-180');
                    iconBox?.classList.remove('bg-white','border-slate-200');
                    iconBox?.classList.add('bg-emerald-50','border-emerald-200');
                }
            });
        });

        // ── CLOSE MODALS ON BACKDROP ──────────────────────
        ['careModal','testiModal'].forEach(id => {
            document.getElementById(id)?.addEventListener('click', function(e) {
                if (e.target === this) {
                    id === 'careModal' ? closeCareModal() : closeTestiModal();
                }
            });
        });
    });
</script>
</body>
</html>