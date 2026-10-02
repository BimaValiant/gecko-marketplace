<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $gecko->code_name }} ({{ $gecko->morph }}) – Valiant Exotics</title>
    <link rel="icon" type="image/png" href="{{ asset('LOGOGECKOFINAL.png') }}">

    <meta property="og:title" content="{{ $gecko->code_name }} ({{ $gecko->morph }}) – Valiant Exotics">
    <meta property="og:description" content="Lihat detail spesifikasi, lineage, dan status adopsi untuk {{ $gecko->morph }} di Valiant Exotics.">
    <meta property="og:image" content="{{ \Illuminate\Support\Str::startsWith($gecko->image, 'http') ? $gecko->image : asset('storage/' . $gecko->image) }}">
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

        /* ── IMAGE FADE ─── */
        #activeImage {
            transition: opacity 220ms ease-out, transform 220ms ease-out;
        }
        #activeImage.switching {
            opacity: 0;
            transform: scale(0.975);
        }

        /* ── THUMBNAIL ─── */
        .thumb-btn.is-active {
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16,185,129,0.15);
        }

        /* ── SPEC ROW ─── */
        .spec-row { transition: background 180ms ease; }
        .spec-row:hover { background: #f0fdf4; }

        /* ── RELATED CARD ─── */
        .gecko-card {
            transition: box-shadow 280ms ease, transform 280ms cubic-bezier(0.16,1,0.3,1);
            will-change: transform;
        }
        .gecko-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(15,23,42,0.10);
        }
        .gecko-card:active { transform: scale(0.97); }

        /* ── WA BUTTON ─── */
        .btn-wa {
            transition: box-shadow 220ms ease, background 150ms ease, transform 150ms ease;
            box-shadow: 0 8px 20px -4px rgba(16,185,129,0.30);
        }
        .btn-wa:hover  { box-shadow: 0 12px 28px -4px rgba(16,185,129,0.40); }
        .btn-wa:active { transform: scale(0.96); box-shadow: 0 4px 12px -2px rgba(16,185,129,0.25); }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white overflow-x-hidden">

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
            <a href="{{ route('katalog') }}" class="hover:text-slate-900 transition-colors duration-200">Katalog</a>
            <a href="{{ route('landing') }}#faq" class="hover:text-slate-900 transition-colors duration-200">FAQ & Garansi</a>
            <a href="{{ route('landing') }}#kontak" class="hover:text-slate-900 transition-colors duration-200">Kontak</a>
        </nav>

        <a href="{{ route('katalog') }}"
           class="group flex items-center gap-2 px-4 py-2 rounded-full bg-slate-100 hover:bg-slate-200 active:scale-95 text-slate-700 text-[13px] font-semibold transition-all duration-200 border border-slate-200/80">
            <svg class="w-3.5 h-3.5 group-hover:-translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            <span class="hidden sm:inline">Kembali ke Katalog</span>
            <span class="sm:hidden">Katalog</span>
        </a>
    </div>
</header>

@php
    $allImages = [];
    $mainUrl = \Illuminate\Support\Str::startsWith($gecko->image, 'http') ? $gecko->image : asset('storage/' . $gecko->image);
    $allImages[] = $mainUrl;
    if (!empty($gecko->images) && is_array($gecko->images)) {
        foreach ($gecko->images as $gImg) {
            $allImages[] = \Illuminate\Support\Str::startsWith($gImg, 'http') ? $gImg : asset('storage/' . $gImg);
        }
    }
@endphp

<!-- ══════════════════════════════════════════════════════════
     MAIN CONTENT
═══════════════════════════════════════════════════════════ -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-16">

    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-[11px] sm:text-xs text-slate-400 font-medium mb-6">
        <a href="{{ route('landing') }}" class="hover:text-emerald-600 transition-colors duration-200">Beranda</a>
        <span class="text-slate-300">/</span>
        <a href="{{ route('katalog') }}" class="hover:text-emerald-600 transition-colors duration-200">Katalog</a>
        <span class="text-slate-300">/</span>
        <span class="text-slate-700 font-semibold truncate max-w-[160px] sm:max-w-xs">{{ $gecko->code_name }}</span>
    </nav>

    <!-- 2-COLUMN GRID -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start" data-aos="fade-up" data-aos-duration="500">

        <!-- ── LEFT: PHOTO GALLERY ── -->
        <div class="lg:col-span-7 space-y-3">

            <!-- Skeleton placeholder -->
            <div id="imgSkeleton" class="rounded-3xl aspect-[4/3] skeleton-shimmer"></div>

            <!-- Main image -->
            <div id="imgFrame" class="relative rounded-3xl overflow-hidden bg-white border border-slate-200/70 shadow-sm aspect-[4/3] flex items-center justify-center hidden">
                <img id="activeImage" src="{{ $allImages[0] }}" alt="{{ $gecko->morph }}"
                     class="w-full h-full object-contain p-2" draggable="false">

                <!-- Status badge -->
                <span class="absolute top-4 left-4 px-3.5 py-1.5 rounded-full text-[10px] sm:text-xs font-bold tracking-wider text-white backdrop-blur-sm {{ $gecko->status === 'READY STOCK' ? 'bg-emerald-500/90 border border-emerald-400/30' : 'bg-slate-900/80 border border-white/15' }}">
                    {{ $gecko->status }}
                </span>

                @if(count($allImages) > 1)
                <span id="imgCount" class="absolute bottom-4 right-4 text-[10px] font-semibold text-white px-2.5 py-1 rounded-full" style="background:rgba(15,23,42,0.50);backdrop-filter:blur(6px);">
                    <span id="activeIdx">1</span> / {{ count($allImages) }}
                </span>
                @endif
            </div>

            <!-- Thumbnails -->
            @if(count($allImages) > 1)
            <div class="flex items-center gap-2.5 overflow-x-auto pb-1">
                @foreach($allImages as $idx => $imgSrc)
                <button onclick="switchImage('{{ $imgSrc }}', this, {{ $idx + 1 }})"
                        class="thumb-btn flex-shrink-0 w-[66px] h-[66px] sm:w-20 sm:h-20 rounded-2xl overflow-hidden border-2 bg-white transition-all duration-200 active:scale-90 {{ $idx === 0 ? 'is-active border-emerald-500' : 'border-slate-200 hover:border-slate-300' }}">
                    <img src="{{ $imgSrc }}" alt="Thumb {{ $idx + 1 }}" class="w-full h-full object-contain p-1.5" loading="lazy">
                </button>
                @endforeach
            </div>
            @endif
        </div>

        <!-- ── RIGHT: DETAILS ── -->
        <div class="lg:col-span-5 space-y-5">

            <!-- Title -->
            <div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-2">#GECKO-{{ $gecko->id }}</span>
                <h1 class="text-2xl sm:text-[2rem] font-black text-slate-900 tracking-tight leading-tight">{{ $gecko->code_name }}</h1>
                <p class="text-base sm:text-lg font-bold text-emerald-600 mt-1.5">{{ $gecko->morph }}</p>
            </div>

            <!-- Price card -->
            <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-5 flex items-center justify-between">
                <div>
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-1">Harga Pengadopsian</span>
                    <span class="text-2xl sm:text-3xl font-black text-slate-900 leading-none">Rp {{ number_format($gecko->price, 0, ',', '.') }}</span>
                </div>
                <div class="flex items-center gap-1.5 text-xs font-semibold {{ $gecko->status === 'READY STOCK' ? 'text-emerald-600' : 'text-slate-400' }}">
                    <span class="w-2 h-2 rounded-full inline-block {{ $gecko->status === 'READY STOCK' ? 'bg-emerald-500 animate-pulse' : 'bg-slate-300' }}"></span>
                    {{ $gecko->status }}
                </div>
            </div>

            <!-- Specs -->
            <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm overflow-hidden">
                <div class="px-5 py-3.5 border-b border-slate-100">
                    <h3 class="font-bold text-slate-900 text-sm">Informasi Kelengkapan Gecko</h3>
                </div>
                <div class="divide-y divide-slate-100">
                    <div class="spec-row px-5 py-3.5 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-medium flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            Tanggal Lahir (DOB)
                        </span>
                        <span class="text-xs font-bold text-slate-900">{{ $gecko->dob ?? 'Tidak dicatat' }}</span>
                    </div>
                    <div class="spec-row px-5 py-3.5 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-medium flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Estimasi Umur
                        </span>
                        <span class="text-xs font-bold text-slate-900">{{ $gecko->age }}</span>
                    </div>
                    <div class="spec-row px-5 py-3.5 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-medium flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            Jenis Kelamin
                        </span>
                        <span class="text-xs font-bold text-slate-900">{{ $gecko->gender }}</span>
                    </div>
                    <div class="spec-row px-5 py-3.5 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-medium flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                            Pola Makan
                        </span>
                        <span class="text-xs font-bold text-slate-900 text-right max-w-[140px] truncate" title="{{ $gecko->feeding }}">{{ $gecko->feeding }}</span>
                    </div>
                    <div class="spec-row px-5 py-3.5 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-medium flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            Kondisi / Minus
                        </span>
                        <span class="text-xs font-bold text-emerald-700">{{ $gecko->defect ?? 'Mulus / No Minus' }}</span>
                    </div>
                </div>
            </div>

            <!-- Lineage notes -->
            @if($gecko->description)
            <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-5 space-y-2">
                <h3 class="font-bold text-slate-900 text-sm flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block"></span>
                    Catatan Perawatan & Lineage
                </h3>
                <p class="text-xs text-slate-600 leading-relaxed whitespace-pre-line">{{ $gecko->description }}</p>
            </div>
            @endif

            <!-- CTAs -->
            <div class="space-y-3 pt-1">
                @if($gecko->status === 'READY STOCK')
                <a href="{{ $waLink }}" target="_blank" rel="noopener noreferrer"
                   class="btn-wa w-full py-4 px-5 rounded-2xl bg-emerald-500 hover:bg-emerald-600 text-white font-bold text-sm flex items-center justify-center gap-3">
                    <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    Pesan via WhatsApp
                </a>
                @else
                <button disabled class="w-full py-4 px-5 rounded-2xl bg-slate-100 text-slate-400 font-bold text-sm cursor-not-allowed border border-slate-200 flex items-center justify-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
                    Gecko Sudah Terjual
                </button>
                @endif

                <button type="button" onclick="copyLink(this)"
                        class="w-full py-3.5 px-5 rounded-2xl bg-slate-100 hover:bg-slate-200 active:scale-95 text-slate-700 font-semibold text-sm flex items-center justify-center gap-2.5 transition-all duration-200 border border-slate-200/80">
                    <svg class="w-4 h-4 text-slate-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    <span id="copyText">Salin Link Gecko</span>
                </button>
            </div>

            <!-- Guarantee strip -->
            <div class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50 border border-emerald-100">
                <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <p class="text-[11px] sm:text-xs text-emerald-800 font-medium leading-snug">
                    <strong>Garansi Live Arrival 100%.</strong> Pengiriman reptile terpercaya se-Indonesia.
                    <a href="{{ route('landing') }}#faq" class="underline underline-offset-2 hover:text-emerald-700 transition-colors">Lihat syarat & ketentuan →</a>
                </p>
            </div>
        </div>
    </div>


    <!-- ── RELATED GECKOS ── -->
    @if(count($otherGeckos) > 0)
    <div class="mt-16 sm:mt-20 pt-10 border-t border-slate-200/70" data-aos="fade-up" data-aos-duration="500">

        <div class="flex items-end justify-between mb-7 sm:mb-8">
            <div>
                <span class="text-[10px] sm:text-xs font-bold tracking-widest text-emerald-600 uppercase block mb-1">Rekomendasi</span>
                <h2 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">Pilihan Gecko Lainnya</h2>
            </div>
            <a href="{{ route('katalog') }}" class="text-xs font-bold text-slate-400 hover:text-emerald-600 transition-colors flex items-center gap-1.5 flex-shrink-0">
                Lihat semua <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-5">
            @foreach($otherGeckos as $idx => $item)
            <a href="{{ route('gecko.show', $item->id) }}"
               class="gecko-card group bg-white rounded-2xl sm:rounded-3xl border border-slate-100 shadow-sm flex flex-col overflow-hidden"
               data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ $idx * 60 }}">

                <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img src="{{ \Illuminate\Support\Str::startsWith($item->image, 'http') ? $item->image : asset('storage/' . $item->image) }}"
                         alt="{{ $item->morph }}" loading="lazy"
                         class="w-full h-full object-cover group-hover:scale-[1.04] transition-transform duration-500 ease-out">
                    <span class="absolute top-2 left-2 px-2.5 py-1 rounded-full text-[9px] sm:text-[10px] font-bold tracking-wider backdrop-blur-sm {{ $item->status === 'READY STOCK' ? 'bg-emerald-500/90 text-white border border-emerald-400/30' : 'bg-slate-900/80 text-slate-200 border border-white/15' }}">
                        {{ $item->status }}
                    </span>
                </div>

                <div class="p-2.5 sm:p-4 flex flex-col gap-1 flex-1">
                    <span class="text-[9px] sm:text-[10px] font-semibold text-slate-400">{{ $item->code_name }}</span>
                    <h3 class="font-bold text-xs sm:text-[14px] text-slate-900 group-hover:text-emerald-600 transition-colors leading-snug line-clamp-2">{{ $item->morph }}</h3>
                    <div class="mt-auto pt-2 flex items-center justify-between gap-1">
                        <span class="text-xs sm:text-[14px] font-black text-slate-900">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                        <div class="hidden sm:flex items-center gap-1 text-[10px] font-medium text-slate-400">
                            <span>{{ $item->gender }}</span>
                            <span class="text-slate-200">·</span>
                            <span>{{ $item->age }}</span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    @endif
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
<footer id="kontak" class="bg-[#0b1329] text-slate-400 pt-14 pb-10 border-t border-white/[0.06]">
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
            <div class="space-y-2.5 text-xs text-center md:text-right">
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 550, easing: 'ease-out-cubic', once: true, offset: 70 });
</script>

<script>
    // ── IMAGE REVEAL FROM SKELETON ──────────────────────────
    const mainImg = document.getElementById('activeImage');
    const skeleton = document.getElementById('imgSkeleton');
    const frame   = document.getElementById('imgFrame');

    function revealImage() {
        skeleton?.classList.add('hidden');
        frame?.classList.remove('hidden');
    }
    if (mainImg) {
        if (mainImg.complete && mainImg.naturalWidth > 0) revealImage();
        else { mainImg.addEventListener('load', revealImage); mainImg.addEventListener('error', revealImage); }
    }

    // ── THUMBNAIL CROSSFADE ─────────────────────────────────
    function switchImage(src, btn, num) {
        const img = document.getElementById('activeImage');
        const idx = document.getElementById('activeIdx');
        img.classList.add('switching');
        setTimeout(() => {
            img.src = src;
            if (idx) idx.textContent = num;
            const done = () => img.classList.remove('switching');
            if (img.complete) done(); else { img.onload = done; img.onerror = done; }
        }, 190);
        document.querySelectorAll('.thumb-btn').forEach(b => {
            b.classList.remove('is-active','border-emerald-500');
            b.classList.add('border-slate-200');
        });
        btn.classList.add('is-active','border-emerald-500');
        btn.classList.remove('border-slate-200');
    }

    // ── COPY LINK ───────────────────────────────────────────
    function copyLink(btn) {
        const el = document.getElementById('copyText');
        navigator.clipboard.writeText(window.location.href).then(() => {
            if (el) el.textContent = '✓ Link Tersalin!';
            btn.classList.add('bg-emerald-50','text-emerald-700','border-emerald-200');
            setTimeout(() => {
                if (el) el.textContent = 'Salin Link Gecko';
                btn.classList.remove('bg-emerald-50','text-emerald-700','border-emerald-200');
            }, 2200);
        }).catch(() => {
            const t = document.createElement('textarea');
            t.value = window.location.href;
            document.body.appendChild(t);
            t.select(); document.execCommand('copy');
            document.body.removeChild(t);
            if (el) el.textContent = '✓ Link Tersalin!';
            setTimeout(() => { if (el) el.textContent = 'Salin Link Gecko'; }, 2200);
        });
    }

    function scrollToTop() { window.scrollTo({ top: 0, behavior: 'smooth' }); }

    document.addEventListener('DOMContentLoaded', function () {
        // Navbar shrink
        const mainHeader      = document.getElementById('mainHeader');
        const headerContainer = document.getElementById('headerContainer');
        const logoBox         = document.getElementById('logoBox');
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
    });
</script>
</body>
</html>