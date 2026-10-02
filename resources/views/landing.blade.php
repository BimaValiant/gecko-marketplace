<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valiant Exotics - Koleksi Leopard Gecko Berkualitas</title>
    
    <!-- FAVICON LOGO VALIANT EXOTICS -->
    <link rel="icon" type="image/png" href="{{ asset('LOGOGECKOFINAL.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>

    <!-- AOS ANIMATION CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Preview Card Pas Share ke WhatsApp & Medsos -->
    <meta property="og:title" content="Valiant Exotics - Koleksi Leopard Gecko Berkualitas">
    <meta property="og:description" content="Breeding with intention. Temukan Leopard Gecko & AFT berkualitas, sehat, dan terawat dengan Garansi Live Arrival 100%.">
    <meta property="og:image" content="{{ asset('LOGOGECKOFINAL.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
</head>
<body class="bg-[#f8fafc] text-slate-800 antialiased selection:bg-emerald-500 selection:text-white overflow-x-hidden relative">

    <!-- NAVBAR RESPONSIF FLUID (DENGAN EFEK DINAMIS SCROLL) -->
    <header id="mainHeader" class="w-full bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 transition-all duration-300 shadow-sm">
        <div id="headerContainer" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 md:h-24 flex items-center justify-between transition-all duration-300">
            
            <!-- Logo & Nama Brand -->
            <a href="{{ route('landing') }}" class="flex items-center gap-2.5 sm:gap-3.5 group">
                <div id="logoBox" class="w-10 h-10 sm:w-12 sm:h-12 md:w-14 md:h-14 flex items-center justify-center flex-shrink-0 transition-all duration-300">
                    <img src="{{ asset('LOGOGECKOFINAL.png') }}" alt="Valiant Exotics Logo" class="w-full h-full object-contain group-hover:scale-105 transition duration-200">
                </div>
                <div class="flex flex-col">
                    <span class="font-extrabold text-base sm:text-xl md:text-2xl tracking-tight text-slate-900 leading-none">VALIANT</span>
                    <span class="font-semibold text-[9px] sm:text-[10px] md:text-xs tracking-widest text-slate-500 uppercase mt-0.5">EXOTICS</span>
                </div>
            </a>

            <!-- Menu Navigasi Desktop -->
            <nav class="hidden md:flex items-center gap-6 lg:gap-10 text-sm lg:text-base font-semibold text-slate-600">
                <a href="#katalog" class="hover:text-slate-900 transition">Katalog</a>
                <button onclick="openCareModal()" class="hover:text-slate-900 transition">Perawatan</button>
                <a href="#faq" class="hover:text-slate-900 transition">FAQ & Garansi</a>
                <a href="#kontak" class="hover:text-slate-900 transition">Kontak</a>
            </nav>

            <!-- Aksi Kanan (Desktop WA & Hamburger Mobile) -->
            <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank" class="hidden sm:flex px-4 py-2 sm:px-5 sm:py-2.5 rounded-full bg-emerald-600 text-white text-xs sm:text-sm font-semibold hover:bg-emerald-700 transition items-center gap-2 shadow-md shadow-emerald-600/20 flex-shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                Hubungi Kami
            </a>

            <!-- Hamburger Button Mobile -->
            <button id="menuBtn" class="md:hidden p-2.5 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 transition focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>

        <!-- Dropdown Menu Mobile -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-b border-slate-100 px-4 py-4 space-y-3 shadow-lg">
            <a href="#katalog" class="block font-semibold text-slate-700 hover:text-slate-900 py-1">Katalog</a>
            <button onclick="openCareModal()" class="block font-semibold text-slate-700 hover:text-slate-900 py-1 w-full text-left">Perawatan</button>
            <a href="#faq" class="block font-semibold text-slate-700 hover:text-slate-900 py-1">FAQ & Garansi</a>
            <a href="#kontak" class="block font-semibold text-slate-700 hover:text-slate-900 py-1">Kontak</a>
            <div class="pt-2">
                <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank" class="w-full py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold flex items-center justify-center gap-2">
                    Hubungi Kami via WhatsApp
                </a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION RESPONSIF -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16 md:py-20 grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 items-center">
        <div class="md:col-span-7 space-y-5 sm:space-y-6 text-center md:text-left" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 justify-center md:justify-start">
                <span class="h-px w-6 sm:w-8 bg-emerald-500"></span>
                <span class="text-[11px] sm:text-xs font-bold tracking-widest text-emerald-600 uppercase">Breeding with intention</span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 leading-tight">
                Koleksi Leopard Gecko <span class="text-emerald-600">berkualitas</span> & terawat.
            </h1>
            <p class="text-slate-500 text-sm sm:text-base lg:text-lg max-w-xl mx-auto md:mx-0 leading-relaxed font-normal">
                Temukan companion eksotis yang sehat, captive-bred, dan dirawat dengan penuh perhatian. Setiap gecko tiba dengan aman, siap menjadi bagian dari rumah Anda.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-3 pt-2">
                <a href="#katalog" class="w-full sm:w-auto px-6 py-3 sm:py-3.5 rounded-full bg-slate-900 text-white font-semibold text-xs sm:text-sm hover:bg-slate-800 transition flex items-center justify-center gap-2 shadow-sm">
                    Lihat Katalog
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <button onclick="openCareModal()" class="w-full sm:w-auto px-6 py-3 sm:py-3.5 rounded-full text-slate-700 font-semibold text-xs sm:text-sm hover:text-slate-900 transition text-center">
                    Kenali cara kami merawat
                </button>
            </div>

            <!-- STATS -->
            <div class="pt-6 sm:pt-8 border-t border-slate-200 grid grid-cols-3 gap-3 sm:gap-6 max-w-md mx-auto md:mx-0" data-aos="fade-up" data-aos-delay="150">
                <div>
                    <span class="block text-lg sm:text-2xl font-extrabold text-slate-900">1+</span>
                    <span class="text-[10px] sm:text-xs font-medium text-slate-500">tahun pengalaman</span>
                </div>
                <div>
                    <span class="block text-lg sm:text-2xl font-extrabold text-slate-900">100%</span>
                    <span class="text-[10px] sm:text-xs font-medium text-slate-500">live arrival</span>
                </div>
                <div>
                    <span class="block text-lg sm:text-2xl font-extrabold text-slate-900">5/5</span>
                    <span class="text-[10px] sm:text-xs font-medium text-slate-500">rating keeper</span>
                </div>
            </div>
        </div>

        <!-- FEATURED CARD -->
        <div class="md:col-span-5 relative max-w-md mx-auto md:max-w-none w-full" data-aos="fade-left">
            <div class="relative rounded-3xl overflow-hidden shadow-xl bg-slate-200 aspect-[4/5] sm:aspect-square md:aspect-[4/5] border border-slate-100">
                <img src="https://community.morphmarket.com/uploads/db1442/original/3X/2/1/21b5fdab97e71256d528504c382e701f080553c5.jpeg" alt="Featured Gecko" class="w-full h-full object-cover">
                <div class="absolute bottom-4 left-4 right-4 sm:bottom-6 sm:left-6 sm:right-auto bg-white/95 backdrop-blur-md px-4 py-2.5 sm:px-5 sm:py-3 rounded-2xl shadow-lg border border-slate-100">
                    <span class="block text-[10px] uppercase tracking-wider font-bold text-slate-400">Featured Morph</span>
                    <span class="font-bold text-sm sm:text-base lg:text-lg text-slate-900">Leopard Gecko Black Night</span>
                </div>
            </div>
        </div>
    </section>

    <!-- KATALOG SECTION -->
    <section id="katalog" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-6 sm:mb-8 gap-3 sm:gap-4 text-center md:text-left" data-aos="fade-up">
            <div>
                <span class="text-[11px] sm:text-xs font-bold tracking-widest text-emerald-600 uppercase">The Collection</span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900 mt-1">Katalog pilihan</h2>
            </div>
            <p class="text-xs sm:text-sm text-slate-500 max-w-sm mx-auto md:mx-0">
                Setiap individu dipilih dan dirawat untuk membawa kualitas terbaik ke habitat barunya.
            </p>
        </div>

        <!-- SEARCH, FILTER & TOGGLE READY STOCK -->
        <div class="flex flex-col sm:flex-row gap-3 mb-8 items-stretch sm:items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="relative flex-1">
                <svg class="w-4 h-4 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" id="searchInput" placeholder="Cari morph atau nama..." class="w-full pl-11 pr-4 py-2.5 sm:py-3 bg-white rounded-2xl border border-slate-200 text-xs sm:text-sm font-medium focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition">
            </div>
            <select id="morphFilter" class="px-4 py-2.5 sm:py-3 bg-white rounded-2xl border border-slate-200 text-xs sm:text-sm font-medium text-slate-600 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition">
                <option value="">Semua morph</option>
                @php
                    $uniqueMorphs = collect($geckos)->pluck('morph')->filter()->unique();
                @endphp
                @foreach($uniqueMorphs as $m)
                    <option value="{{ $m }}">{{ $m }}</option>
                @endforeach
            </select>
            <!-- DROPDOWN URUTKAN HARGA -->
            <select id="sortFilter" class="px-4 py-2.5 sm:py-3 bg-white rounded-2xl border border-slate-200 text-xs sm:text-sm font-medium text-slate-600 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition">
                <option value="default">Urutkan: Terbaru</option>
                <option value="price-asc">Harga: Terendah ke Tinggi</option>
                <option value="price-desc">Harga: Tertinggi ke Rendah</option>
            </select>
            <!-- TOGGLE READY STOCK -->
            <button id="readyToggleBtn" type="button" class="px-4 py-2.5 sm:py-3 bg-white border border-slate-200 rounded-2xl text-xs sm:text-sm font-semibold text-slate-600 hover:text-slate-900 transition flex items-center justify-center gap-2 select-none">
                <span id="readyIndicator" class="w-2.5 h-2.5 rounded-full bg-slate-300 transition-colors"></span>
                <span>Hanya Ready Stock</span>
            </button>
        </div>

        <!-- GECKO GRID RESPONSIF -->
        <div id="geckoGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">
            @foreach($geckos as $gecko)
            @php
                $codeName = $gecko['code_name'] ?? $gecko->code_name;
                $morph = $gecko['morph'] ?? $gecko->morph;
                $status = $gecko['status'] ?? $gecko->status;
            @endphp
            <div class="gecko-card bg-white rounded-3xl p-3 border border-slate-100 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between"
                 data-aos="fade-up"
                 data-aos-delay="{{ ($loop->index % 4) * 100 }}"
                 data-name="{{ strtolower($codeName) }}" 
                 data-morph="{{ strtolower($morph) }}"
                 data-status="{{ strtolower($status) }}"
                 data-price="{{ $gecko['price'] ?? $gecko->price }}">
                <div>
                    <!-- Link Gambar Ratio Rapi & Seragam -->
                    <a href="{{ route('gecko.show', $gecko['id'] ?? $gecko->id) }}" class="block relative rounded-2xl overflow-hidden aspect-[4/3] bg-slate-100 mb-3 sm:mb-4 group">
                        <img src="{{ \Illuminate\Support\Str::startsWith($gecko['image'] ?? $gecko->image, 'http') ? ($gecko['image'] ?? $gecko->image) : asset('storage/' . ($gecko['image'] ?? $gecko->image)) }}" alt="{{ $morph }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-[9px] sm:text-[10px] font-bold tracking-wider text-white {{ $status === 'READY STOCK' ? 'bg-emerald-500' : 'bg-rose-500' }}">
                            {{ $status }}
                        </span>
                    </a>

                    <!-- Details -->
                    <div class="px-1 sm:px-2">
                        <span class="text-[11px] sm:text-xs font-semibold text-slate-400 block">{{ $codeName }}</span>
                        <a href="{{ route('gecko.show', $gecko['id'] ?? $gecko->id) }}" class="font-bold text-sm sm:text-base text-slate-900 hover:text-emerald-600 transition block mb-2 sm:mb-3">
                            {{ $morph }}
                        </a>
                        
                        <div class="flex flex-wrap gap-1 sm:gap-1.5 mb-3 sm:mb-4">
                            <span class="px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-lg bg-slate-100 text-slate-600 text-[10px] sm:text-xs font-semibold">{{ $gecko['gender'] ?? $gecko->gender }}</span>
                            <span class="px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-lg bg-slate-100 text-slate-600 text-[10px] sm:text-xs font-semibold">{{ $gecko['age'] ?? $gecko->age }}</span>
                            <span class="px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-lg bg-slate-100 text-slate-600 text-[10px] sm:text-xs font-semibold">{{ $gecko['feeding'] ?? $gecko->feeding }}</span>
                        </div>

                        <div class="text-sm sm:text-base font-extrabold text-slate-900 mb-3 sm:mb-4">
                            Rp {{ number_format($gecko['price'] ?? $gecko->price, 0, ',', '.') }}
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="px-1 sm:px-2 pb-1 sm:pb-2">
                    <a href="{{ route('gecko.show', $gecko['id'] ?? $gecko->id) }}" class="w-full py-2.5 sm:py-3 px-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs flex items-center justify-center gap-2 transition shadow-sm">
                        Lihat Detail & Adopsi
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- NOTIFICATION IF NO MATCH FOUND -->
        <div id="noResults" class="hidden py-12 sm:py-16 text-center">
            <div class="w-12 h-12 sm:w-16 sm:h-16 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4 text-slate-400">
                <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <h3 class="text-slate-800 font-bold text-sm sm:text-base mb-1">Gecko tidak ditemukan</h3>
            <p class="text-slate-500 text-xs">Coba gunakan kata kunci atau pilihan morph lainnya.</p>
        </div>
    </section>

    <!-- PROMISE SECTION -->
    <section id="perawatan" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-start">
            <div class="md:col-span-5 space-y-2 sm:space-y-3 text-center md:text-left" data-aos="fade-right">
                <span class="text-[11px] sm:text-xs font-bold tracking-widest text-emerald-600 uppercase">Our Promise</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 leading-tight">
                    Tenang memilih, nyaman memelihara.
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                    Kami percaya pengalaman memelihara dimulai jauh sebelum gecko sampai di rumah. Karena itu, kami hadir mendampingi setiap langkah Anda.
                </p>
            </div>

            <div class="md:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                <div class="bg-white p-5 sm:p-6 rounded-2xl border border-slate-100 space-y-2 sm:space-y-3 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm">Aman & legal</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Dokumentasi jelas dan pengiriman aman untuk hewan hidup.</p>
                </div>

                <div class="bg-white p-5 sm:p-6 rounded-2xl border border-slate-100 space-y-2 sm:space-y-3 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm">Genetik terjaga</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Breeding terencana dengan lineage dan kesehatan terpaut.</p>
                </div>

                <div class="bg-white p-5 sm:p-6 rounded-2xl border border-slate-100 space-y-2 sm:space-y-3 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm">Selalu dibantu</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Konsultasi gratis dari setup habitat hingga feeding.</p>
                </div>
            </div>
        </div>
    </section>

<!-- SECTION TESTIMONI PEMBELI -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16 border-t border-slate-200/60">
        <div class="text-center space-y-2 mb-10" data-aos="fade-up">
            <span class="text-[11px] sm:text-xs font-bold tracking-widest text-emerald-600 uppercase">Testimonials</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Kata Mereka yang Sudah Mengadopsi</h2>
            <p class="text-xs sm:text-sm text-slate-500 max-w-lg mx-auto">Kepuasan dan kebahagiaan para adopter saat menerima koleksi gecko dari Valiant Exotics.</p>
            
            <!-- Tombol Buka Modal Tulis Ulasan -->
            <div class="pt-3">
                <button type="button" onclick="openTestiModal()" class="px-5 py-2.5 rounded-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs transition shadow-sm inline-flex items-center gap-2">
                    ✍️ Tulis Ulasan Kamu
                </button>
            </div>
        </div>

        @if(session('success_testi'))
        <div class="max-w-xl mx-auto mb-8 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-medium text-center">
            {{ session('success_testi') }}
        </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($testimonials as $testi)
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition duration-300 space-y-4 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 100 }}">
                <div class="space-y-3">
                    <!-- Rating Bintang -->
                    <div class="flex items-center gap-1 text-amber-400 text-sm">
                        @for($i = 0; $i < $testi->rating; $i++)
                            ★
                        @endfor
                    </div>
                    
                    <!-- Ulasan -->
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
                        "{{ $testi->review }}"
                    </p>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-slate-900 leading-tight">{{ $testi->client_name }}</h4>
                        <span class="text-[10px] sm:text-xs text-slate-400 block mt-0.5">{{ $testi->city ?? 'Purwokerto' }}</span>
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
                Belum ada ulasan yang dipajang. Klik tombol di atas untuk jadi yang pertama memberi ulasan!
            </div>
            @endforelse
        </div>
    </section>

    <!-- Floating WA Button Kiri Bawah -->
    <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank" class="fixed bottom-6 left-6 z-40 p-3.5 rounded-full bg-emerald-500 text-white shadow-2xl hover:bg-emerald-600 transition duration-300 flex items-center justify-center border border-emerald-400/50">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
    </a>

    <!-- MODAL FORM TULIS TESTIMONI PUBLIK -->
    <div id="testiModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-md w-full p-6 space-y-4 shadow-2xl border border-slate-100">
            <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                <h3 class="font-extrabold text-slate-900 text-base">Tulis Ulasan Adopsi</h3>
                <button type="button" onclick="closeTestiModal()" class="text-slate-400 hover:text-slate-600 text-xl font-bold">&times;</button>
            </div>

            <form action="{{ route('testimonial.public.store') }}" method="POST" class="space-y-3 text-xs">
                @csrf
                <div>
                    <label class="block font-semibold text-slate-700 mb-1">Nama Kamu *</label>
                    <input type="text" name="client_name" required placeholder="Contoh: Dimas R." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-semibold text-slate-700 mb-1">Kota / Lokasi</label>
                        <input type="text" name="city" placeholder="Purwokerto" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none">
                    </div>
                    <div>
                        <label class="block font-semibold text-slate-700 mb-1">Morph yang Diadopsi</label>
                        <input type="text" name="morph_adopted" placeholder="DB Raptor" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none">
                    </div>
                </div>
                <div>
                    <label class="block font-semibold text-slate-700 mb-1">Rating Bintang *</label>
                    <select name="rating" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                        <option value="5">⭐⭐⭐⭐⭐ (5 Bintang)</option>
                        <option value="4">⭐⭐⭐⭐ (4 Bintang)</option>
                        <option value="3">⭐⭐⭐ (3 Bintang)</option>
                    </select>
                </div>
                <div>
                    <label class="block font-semibold text-slate-700 mb-1">Isi Ulasan / Pengalaman *</label>
                    <textarea name="review" required rows="3" placeholder="Ceritakan kondisi gecko saat sampai, respon admin, dll..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none"></textarea>
                </div>
                <div class="pt-2 flex justify-end gap-2">
                    <button type="button" onclick="closeTestiModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">Batal</button>
                    <button type="submit" class="px-5 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold">Kirim Ulasan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- SCRIPT KHUSUS MODAL TESTIMONI -->
    <script>
        function openTestiModal() {
            const modal = document.getElementById('testiModal');
            if (modal) {
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }
        }

        function closeTestiModal() {
            const modal = document.getElementById('testiModal');
            if (modal) {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        }
    </script>
    <!-- Floating WA Button Kiri Bawah -->
    <a href="https://wa.me/6285923568144?text=Halo%20Admin%20Valiant%20Exotics" target="_blank" class="fixed bottom-6 left-6 z-40 p-3.5 rounded-full bg-emerald-500 text-white shadow-2xl hover:bg-emerald-600 transition duration-300 flex items-center justify-center border border-emerald-400/50">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
    </a>

    <!-- SECTION FAQ & SYARAT GARANSI -->
    <section id="faq" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
        <div class="text-center space-y-2 mb-8" data-aos="fade-up">
            <span class="text-[11px] sm:text-xs font-bold tracking-widest text-emerald-600 uppercase">Information Center</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">FAQ & Syarat Garansi</h2>
            <p class="text-xs sm:text-sm text-slate-500">Hal penting seputar transaksi, pengiriman, dan pemeliharaan di Valiant Exotics.</p>
        </div>

        <div class="space-y-3" data-aos="fade-up" data-aos-delay="100">
            
            <!-- FAQ 1: Alur Pemesanan -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Bagaimana Alur Pemesanan Hewan di Website Ini?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content">
                    Pilih unit gecko/AFT di katalog &rarr; Klik tombol <strong>"Lihat Detail & Adopsi"</strong> &rarr; Anda akan terhubung ke WhatsApp kami dengan format pesan otomatis &rarr; Konfirmasi ketersediaan & pembayaran &rarr; Hewan siap dikirim.
                </div>
            </div>

            <!-- FAQ 2: Metode Pembayaran -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Metode Pembayaran Apa Saja yang Diterima?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content">
                    Kami menerima pembayaran via <strong>Transfer Bank Resmi</strong>, <strong>E-Wallet</strong> (DANA, OVO, GoPay, ShopeePay), serta <strong>Pembayaran Tunai (Cash)</strong> khusus transaksi COD di area Purwokerto.
                </div>
            </div>

            <!-- FAQ 3: Jadwal Pengiriman -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Hari Apa Saja Jadwal Pengiriman Hewan Diterapkan?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content">
                    Pengiriman luar kota hanya dilakukan hari <strong>Senin sampai Kamis</strong> untuk mencegah paket hewan tertahan di gudang ekspedisi saat akhir pekan (weekend). 
                </div>
            </div>

            <!-- FAQ 4: Jalur Ekspedisi -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Jalur Pengiriman Apa Saja yang Digunakan?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content">
                    Kami melayani pengiriman ke seluruh Pulau Jawa dan luar pulau yang terjangkau lewat ekspedisi hewan resmi: <strong>TIKI ONS, JNE YES, KAI Logistik (Kereta Api), serta Travel/Ojol</strong> untuk pengiriman cepat area lokal.
                </div>
            </div>

            <!-- FAQ 5: Garansi Live Arrival -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Bagaimana Syarat Klaim Garansi 100% Live Arrival?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content">
                    Garansi 100% hewan tiba dengan selamat berlaku jika Anda menyertakan <strong>video unboxing tanpa cut/edit</strong> dari awal pembukaan paket. Video wajib dikirimkan maksimal 2 jam setelah paket dinyatakan diterima oleh pihak kurir.
                </div>
            </div>

            <!-- FAQ 6: Garansi Ekor Putus -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Bagaimana Jika Ekor Gecko Putus (Autotomy) Saat Pengiriman?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content">
                    Jika ekor putus di dalam perjalanan, kami memberikan <strong>refund sebesar 25% dari harga gecko</strong> (atau opsi pertukaran unit) dengan syarat melampirkan video unboxing utuh tanpa dipotong.
                </div>
            </div>

            <!-- FAQ 7: Garansi Sexing -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Bagaimana Jika Jenis Kelamin (Sexing) Tidak Sesuai Saat Dewasa?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content">
                    Untuk kelas Adult/Proven, sexing dijamin <strong>100% akurat</strong>. Untuk kelas Baby/Juvenile, sexing bersifat estimasi (TSL/TSM). Jika terjadi kesalahan sexing pada unit bernomor sertifikat/lineage jelas, kami siap memberikan solusi tukar unit atau klaim garansi sesuai kesepakatan.
                </div>
            </div>

            <!-- FAQ 8: Data Lineage & Sertifikat -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Apakah Setiap Adopsi Mendapatkan Data Lineage (Silsilah Genetik)?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content">
                    Ya, khusus adopsi morph premium Leopard Gecko dan seluruh varian AFT akan mendapatkan <strong>data lineage</strong> berisi silsilah indukan (Sire & Dam), tanggal menetas (hatch date), serta informasi genetik bawaan (het).
                </div>
            </div>

            <!-- FAQ 9: Hold / DP 40% -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Apakah Bisa Menahan (Hold/DP) Gecko Terlebih Dahulu?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content space-y-2">
                    <p>
                        Bisa. Anda dapat melakukan booking/hold unit gecko pilihan Anda dengan membayar <strong>DP minimal 40%</strong> dari harga deal. Masa hold berlaku maksimal 7–14 hari sesuai kesepakatan.
                    </p>
                    <p class="text-slate-600 font-medium bg-rose-50 border border-rose-100 p-3 rounded-xl text-xs text-rose-700">
                        <strong>Catatan Penting:</strong> Apabila pembeli membatalkan transaksi secara sepihak, maka uang DP dinyatakan <strong>hangus dan tidak dapat dikembalikan</strong>.
                    </p>
                </div>
            </div>

            <!-- FAQ 10: Konsultasi Pemula -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Apakah Pemula Boleh Konsultasi Setelah Mengadopsi?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content">
                    Tentu saja! Kami menyediakan <strong>layanan konsultasi gratis seumur hidup</strong> via WhatsApp untuk membimbing Anda seputar set-up kandang, jadwal makan, hingga penanganan shedding (ganti kulit).
                </div>
            </div>

            <!-- FAQ 11: COD / Lokasi -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <button class="w-full px-5 py-4 text-left font-bold text-slate-900 text-sm flex justify-between items-center focus:outline-none faq-btn">
                    <span>Apakah Bisa Pantau Langsung / COD ke Lokasi?</span>
                    <svg class="w-4 h-4 text-slate-400 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-5 pb-4 text-xs sm:text-sm text-slate-500 leading-relaxed hidden faq-content space-y-3">
                    <p>
                        Bisa banget! Untuk wilayah <strong>Purwokerto dan sekitarnya</strong>, Anda dapat melakukan COD di titik temu yang disepakati atau datang langsung ke tempat kami dengan janji temu terlebih dahulu.
                    </p>
                    <div class="pt-1">
                        <a href="https://maps.app.goo.gl/aUuBKzp6oXig4tR89" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-emerald-50 text-emerald-700 hover:bg-emerald-100 font-semibold text-xs transition border border-emerald-200 shadow-sm">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Lihat Lokasi di Google Maps
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER RESPONSIF (TANPA FLICKER / NGEBLINK) -->
    <footer id="kontak" class="bg-[#0b1329] text-slate-400 py-10 sm:py-14 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            
            <!-- Kiri: Logo, Branding & Medsos -->
            <div class="space-y-4 text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-3">
                    <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('LOGOGECKOFINAL.png') }}" alt="Valiant Exotics Logo" class="w-full h-full object-contain">
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="font-extrabold text-lg text-white leading-none">VALIANT</span>
                        <span class="font-medium text-[10px] tracking-widest text-slate-400 uppercase mt-0.5">EXOTICS</span>
                    </div>
                </div>
                <p class="text-xs text-slate-400 max-w-xs mx-auto md:mx-0 leading-relaxed">
                    Thoughtfully bred. Carefully raised. Ready for home.
                </p>

                <!-- Tombol Media Sosial (Instagram & TikTok) -->
                <div class="pt-1 flex items-center justify-center md:justify-start gap-3">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/bimavaliant?stkn=b2g5cGg5ZDQzeDFt" target="_blank" rel="noopener noreferrer" class="px-3.5 py-2 rounded-xl bg-slate-800/80 hover:bg-rose-600 text-slate-300 hover:text-white text-xs font-semibold flex items-center gap-2 transition duration-300 border border-slate-700/60 shadow-sm group">
                        <svg class="w-4 h-4 text-rose-400 group-hover:text-white transition" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        Instagram
                    </a>

                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@23vallrt?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer" class="px-3.5 py-2 rounded-xl bg-slate-800/80 hover:bg-slate-700 text-slate-300 hover:text-white text-xs font-semibold flex items-center gap-2 transition duration-300 border border-slate-700/60 shadow-sm group">
                        <svg class="w-4 h-4 text-cyan-400 group-hover:text-white transition" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.98-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.07-1.3 1.8-.24.83-.06 1.78.43 2.46.5.68 1.34 1.08 2.18 1.06 1.05-.01 2.05-.59 2.58-1.5.37-.62.53-1.37.52-2.1-.01-4.92-.01-9.84-.01-14.76z"/></svg>
                        TikTok
                    </a>
                </div>
            </div>

            <!-- Kanan: Info Lokasi & Garansi -->
            <div class="space-y-2 text-xs text-center md:text-right">
                <p class="flex items-center justify-center md:justify-end gap-2">
                    <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Purwokerto, Banyumas, Jawa Tengah, Indonesia
                </p>
                <p class="flex items-center justify-center md:justify-end gap-2 text-slate-400">
                    <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Pengiriman live reptile terpercaya
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 pt-6 border-t border-slate-800/60 text-[11px] text-slate-500 text-center md:text-left">
            <p>© {{ date('Y') }} Valiant Exotics. Live arrival guarantee berlaku sesuai syarat.</p>
        </div>
    </footer>

    <!-- MODAL PANDUAN PERAWATAN (CARE SHEET) -->
    <div id="careModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4 transition-all duration-300">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] flex flex-col shadow-2xl border border-slate-100 overflow-hidden transform transition-all scale-95 opacity-0" id="careModalBox">
            
            <!-- Header Modal -->
            <div class="px-6 py-5 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-extrabold text-slate-900 text-lg leading-tight">Panduan Perawatan (Care Sheet)</h3>
                        <p class="text-xs text-slate-500">Standar pemeliharaan Valiant Exotics</p>
                    </div>
                </div>
                <button onclick="closeCareModal()" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-900 flex items-center justify-center transition focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Content Body (Scrollable) -->
            <div class="p-6 sm:p-8 overflow-y-auto space-y-6 text-xs sm:text-sm text-slate-600 leading-relaxed">
                
                <!-- Item 1: Kandang & Substrat -->
                <div class="bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-100 space-y-2">
                    <div class="flex items-center gap-2 font-bold text-slate-900 text-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        1. Kandang & Substrat (Habitat)
                    </div>
                    <p>Gunakan wadah soliter/kontainer berbahan plastik atau akuarium kaca berlubang udara cukup. Substrat paling aman menggunakan <strong>Paper Towel / Tisu Dapur</strong> (mudah dibersihkan) atau <strong>Cocopeat lembap</strong> khusus AFT Gecko.</p>
                </div>

                <!-- Item 2: Suhu & Kelembapan -->
                <div class="bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-100 space-y-2">
                    <div class="flex items-center gap-2 font-bold text-slate-900 text-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        2. Suhu & Kelembapan (Temperature)
                    </div>
                    <ul class="list-disc pl-5 space-y-1">
                        <li><strong>Leopard Gecko:</strong> Suhu ideal 28°C – 31°C dengan kelembapan sedang (30% - 40%).</li>
                        <li><strong>African Fat-Tailed (AFT):</strong> Membutuhkan kelembapan ekstra (60% - 70%). Wajib sediakan <em>Moist Hide</em> (tempat sembunyi lembap berisi moss/cocopeat).</li>
                    </ul>
                </div>

                <!-- Item 3: Pakan & Kalsium -->
                <div class="bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-100 space-y-2">
                    <div class="flex items-center gap-2 font-bold text-slate-900 text-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        3. Pakan & Nutrisi (Feeding & D3)
                    </div>
                    <p>Beri makan <strong>Jangkrik, Dubia Roach, atau Ulat Hongkong</strong> berukuran pas dengan mulut gecko. Lakukan <em>dusting</em> (tabur) bubuk <strong>Kalsium + D3</strong> pada pakan 2–3 kali seminggu untuk mencegah penyakit tulang (MBD).</p>
                </div>

                <!-- Item 4: Air & Kebersihan -->
                <div class="bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-100 space-y-2">
                    <div class="flex items-center gap-2 font-bold text-slate-900 text-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        4. Air Minum & Sanitasi
                    </div>
                    <p>Sediakan wadah minum dangkal yang terisi air bersih setiap hari. Bersihkan kotoran padat secara berkala dan ganti seluruh substrat tisu minimal 1 minggu sekali.</p>
                </div>

            </div>

            <!-- Footer Modal -->
            <div class="px-6 py-4 border-t border-slate-100 flex justify-end bg-slate-50/50">
                <button onclick="closeCareModal()" class="px-6 py-2.5 rounded-full bg-slate-900 text-white font-semibold text-xs hover:bg-slate-800 transition shadow-sm">
                    Mengerti & Tutup
                </button>
            </div>
        </div>
    </div>  

<script>
    function openTestiModal() { document.getElementById('testiModal').classList.remove('hidden'); }
    function closeTestiModal() { document.getElementById('testiModal').classList.add('hidden'); }
</script>
        </div>
    </div>

    <!-- TOMBOL BACK TO TOP MELAYANG -->
    <button id="backToTopBtn" onclick="scrollToTop()" class="fixed bottom-6 right-6 z-40 p-3 sm:p-3.5 rounded-2xl bg-slate-900 text-white shadow-2xl hover:bg-slate-800 transition-all duration-300 opacity-0 translate-y-10 pointer-events-none focus:outline-none flex items-center justify-center border border-slate-700/50">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>

    <!-- AOS ANIMATION JS (DENGAN RE-ANIMATE PAS SCROLL KE ATAS) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            mirror: true, // Memutar animasi kembali saat di-scroll balik ke atas!
            offset: 120
        });
    </script>

    <!-- SCRIPT INTERAKSI & DYNAMIC HEADER SCROLL -->
    <script>
        function openCareModal() {
            const modal = document.getElementById('careModal');
            const modalBox = document.getElementById('careModalBox');
            if (modal && modalBox) {
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
                setTimeout(() => {
                    modalBox.classList.remove('scale-95', 'opacity-0');
                    modalBox.classList.add('scale-100', 'opacity-100');
                }, 10);
            }
        }

        function closeCareModal() {
            const modal = document.getElementById('careModal');
            const modalBox = document.getElementById('careModalBox');
            if (modal && modalBox) {
                modalBox.classList.remove('scale-100', 'opacity-100');
                modalBox.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }, 200);
            }
        }

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Header Dynamic Shrink Animasi Pas Di-Scroll
            const mainHeader = document.getElementById('mainHeader');
            const headerContainer = document.getElementById('headerContainer');
            const logoBox = document.getElementById('logoBox');

            window.addEventListener('scroll', function () {
                if (window.scrollY > 40) {
                    mainHeader.classList.add('shadow-md', 'bg-white/95');
                    headerContainer.classList.remove('h-16', 'sm:h-20', 'md:h-24');
                    headerContainer.classList.add('h-14', 'sm:h-16', 'md:h-16');
                    logoBox.classList.remove('w-10', 'h-10', 'sm:w-12', 'sm:h-12', 'md:w-14', 'md:h-14');
                    logoBox.classList.add('w-8', 'h-8', 'sm:w-10', 'sm:h-10', 'md:w-10', 'md:h-10');
                } else {
                    mainHeader.classList.remove('shadow-md', 'bg-white/95');
                    headerContainer.classList.remove('h-14', 'sm:h-16', 'md:h-16');
                    headerContainer.classList.add('h-16', 'sm:h-20', 'md:h-24');
                    logoBox.classList.remove('w-8', 'h-8', 'sm:w-10', 'sm:h-10', 'md:w-10', 'md:h-10');
                    logoBox.classList.add('w-10', 'h-10', 'sm:w-12', 'sm:h-12', 'md:w-14', 'md:h-14');
                }
            });

            // Hamburger Mobile Menu Toggle
            const menuBtn = document.getElementById('menuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Scroll Listener buat Tombol Back to Top
            window.addEventListener('scroll', function () {
                const backToTopBtn = document.getElementById('backToTopBtn');
                if (backToTopBtn) {
                    if (window.scrollY > 300) {
                        backToTopBtn.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                        backToTopBtn.classList.add('opacity-100', 'translate-y-0');
                    } else {
                        backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
                        backToTopBtn.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
                    }
                }
            });

            // Live Search, Morph Filter, Sort Price & Toggle Ready Stock
            const searchInput = document.getElementById('searchInput');
            const morphFilter = document.getElementById('morphFilter');
            const sortFilter = document.getElementById('sortFilter');
            const readyToggleBtn = document.getElementById('readyToggleBtn');
            const readyIndicator = document.getElementById('readyIndicator');
            const geckoGrid = document.getElementById('geckoGrid');
            const cards = document.querySelectorAll('.gecko-card');
            const noResults = document.getElementById('noResults');

            let readyOnly = false;

            if (readyToggleBtn) {
                readyToggleBtn.addEventListener('click', function () {
                    readyOnly = !readyOnly;
                    if (readyOnly) {
                        readyIndicator.classList.remove('bg-slate-300');
                        readyIndicator.classList.add('bg-emerald-500');
                        readyToggleBtn.classList.add('border-emerald-500', 'bg-emerald-50/30');
                    } else {
                        readyIndicator.classList.remove('bg-emerald-500');
                        readyIndicator.classList.add('bg-slate-300');
                        readyToggleBtn.classList.remove('border-emerald-500', 'bg-emerald-50/30');
                    }
                    applyFilterAndSort();
                });
            }

            function applyFilterAndSort() {
                const query = searchInput.value.toLowerCase().trim();
                const selectedMorph = morphFilter.value.toLowerCase().trim();
                let visibleCount = 0;

                // 1. Filter Search, Morph, & Ready Stock
                cards.forEach(card => {
                    const name = card.getAttribute('data-name') || '';
                    const morph = card.getAttribute('data-morph') || '';
                    const status = card.getAttribute('data-status') || '';

                    const matchesSearch = name.includes(query) || morph.includes(query);
                    const matchesMorph = selectedMorph === '' || morph.includes(selectedMorph);
                    const matchesReady = !readyOnly || status.includes('ready stock');

                    if (matchesSearch && matchesMorph && matchesReady) {
                        card.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        card.classList.add('hidden');
                    }
                });

                if (visibleCount === 0) {
                    noResults.classList.remove('hidden');
                } else {
                    noResults.classList.add('hidden');
                }

                // 2. Sort Harga (Urutkan Posisi Card)
                const sortValue = sortFilter ? sortFilter.value : 'default';
                const cardArray = Array.from(cards);

                cardArray.sort((a, b) => {
                    const priceA = parseFloat(a.getAttribute('data-price')) || 0;
                    const priceB = parseFloat(b.getAttribute('data-price')) || 0;

                    if (sortValue === 'price-asc') {
                        return priceA - priceB;
                    } else if (sortValue === 'price-desc') {
                        return priceB - priceA;
                    }
                    return 0;
                });

                if (geckoGrid) {
                    cardArray.forEach(card => geckoGrid.appendChild(card));
                }
            }

            if (searchInput) searchInput.addEventListener('input', applyFilterAndSort);
            if (morphFilter) morphFilter.addEventListener('change', applyFilterAndSort);
            if (sortFilter) sortFilter.addEventListener('change', applyFilterAndSort);

            // FAQ Accordion Toggle
            const faqBtns = document.querySelectorAll('.faq-btn');
            faqBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.faq-icon');
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            });

            // Close modal when clicking outside backdrop
            const careModal = document.getElementById('careModal');
            if (careModal) {
                careModal.addEventListener('click', function (e) {
                    if (e.target === this) {
                        closeCareModal();
                    }
                });
            }
        });
    </script>
</body>
</html>