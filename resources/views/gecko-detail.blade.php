<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $gecko->code_name }} ({{ $gecko->morph }}) - Valiant Exotics</title>

    <!-- FAVICON LOGO VALIANT EXOTICS -->
    <link rel="icon" type="image/png" href="{{ asset('LOGOGECKOFINAL.png') }}">

    <!-- SEO & OPENGRAPH META TAGS -->
    <meta property="og:title" content="{{ $gecko->code_name }} ({{ $gecko->morph }}) - Valiant Exotics">
    <meta property="og:description" content="Lihat detail spesifikasi, lineage, dan status adopsi untuk {{ $gecko->morph }} di Valiant Exotics.">
    <meta property="og:image" content="{{ \Illuminate\Support\Str::startsWith($gecko->image, 'http') ? $gecko->image : asset('storage/' . $gecko->image) }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-800 antialiased selection:bg-emerald-500 selection:text-white">

    <!-- NAVBAR DETAIL (VALIANT EXOTICS) -->
    <header class="w-full bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">
            
            <!-- Logo & Nama Brand Valiant Exotics -->
            <a href="{{ route('landing') }}" class="flex items-center gap-3 group">
                <div class="w-12 h-12 flex items-center justify-center flex-shrink-0">
                    <img src="{{ asset('LOGOGECKOFINAL.png') }}" alt="Valiant Exotics Logo" class="w-full h-full object-contain group-hover:scale-105 transition duration-200">
                </div>
                <div class="flex flex-col">
                    <span class="font-extrabold text-lg tracking-tight text-slate-900 leading-none">VALIANT EXOTICS</span>
                </div>
            </a>

            <!-- Tombol Kembali ke Katalog -->
            <a href="{{ route('landing') }}#katalog" class="px-5 py-2.5 rounded-full bg-slate-100 text-slate-700 text-xs font-semibold hover:bg-slate-200 hover:text-slate-900 transition flex items-center gap-2 shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Katalog
            </a>

        </div>
    </header>

    @php
        // Gabungkan gambar utama & galeri foto
        $allImages = [];
        $mainUrl = \Illuminate\Support\Str::startsWith($gecko->image, 'http') ? $gecko->image : asset('storage/' . $gecko->image);
        $allImages[] = $mainUrl;

        if (!empty($gecko->images) && is_array($gecko->images)) {
            foreach ($gecko->images as $gImg) {
                $allImages[] = \Illuminate\Support\Str::startsWith($gImg, 'http') ? $gImg : asset('storage/' . $gImg);
            }
        }
    @endphp

    <!-- MAIN DETAIL CONTENT -->
    <main class="max-w-7xl mx-auto px-6 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- LEFT COLUMN: PHOTO GALLERY -->
            <div class="lg:col-span-7 space-y-4">
                <!-- Main Image Display (Full / Un-cropped) -->
                <div class="relative rounded-3xl overflow-hidden bg-slate-900/5 border border-slate-200/80 shadow-sm aspect-[4/3] flex items-center justify-center">
                    <img id="activeImage" src="{{ $allImages[0] }}" alt="{{ $gecko->morph }}" class="w-full h-full object-contain p-2 transition duration-300">
                    <span class="absolute top-4 left-4 px-3.5 py-1.5 rounded-full text-xs font-bold tracking-wider text-white {{ $gecko->status === 'READY STOCK' ? 'bg-emerald-500' : 'bg-slate-900' }}">
                        {{ $gecko->status }}
                    </span>
                </div>

                <!-- Gallery Thumbnails -->
                @if(count($allImages) > 1)
                <div class="flex items-center gap-3 overflow-x-auto pb-2">
                    @foreach($allImages as $index => $imgSrc)
                    <button onclick="switchImage('{{ $imgSrc }}', this)" class="thumb-btn flex-shrink-0 w-20 h-20 rounded-2xl overflow-hidden border-2 transition bg-slate-900/5 flex items-center justify-center {{ $index === 0 ? 'border-emerald-500 scale-95' : 'border-slate-200 hover:border-slate-400' }}">
                        <img src="{{ $imgSrc }}" alt="Gallery Image {{ $index + 1 }}" class="w-full h-full object-contain p-1">
                    </button>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- RIGHT COLUMN: DETAILS & ORDER -->
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <span class="text-xs font-bold text-slate-400 block tracking-wider uppercase mb-1">Kode: #GECKO-{{ $gecko->id }}</span>
                    <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">{{ $gecko->code_name }}</h1>
                    <p class="text-lg font-semibold text-emerald-600 mt-1">{{ $gecko->morph }}</p>
                </div>

                <!-- Price Box -->
                <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between">
                    <div>
                        <span class="text-xs font-semibold text-slate-400 block">Harga Pengadopsian</span>
                        <span class="text-2xl font-extrabold text-slate-900">Rp {{ number_format($gecko->price, 0, ',', '.') }}</span>
                    </div>
                </div>

                <!-- Specifications Grid -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                    <h3 class="font-bold text-slate-900 text-sm border-b border-slate-100 pb-3">Informasi Kelengkapan Gecko</h3>
                    <div class="grid grid-cols-2 gap-4 text-xs">
                        <div class="p-3 bg-slate-50 rounded-xl">
                            <span class="text-slate-400 block font-medium">Tanggal Lahir (DOB)</span>
                            <span class="font-bold text-slate-800 text-sm mt-0.5 block">{{ $gecko->dob ?? 'Tidak dicatat' }}</span>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-xl">
                            <span class="text-slate-400 block font-medium">Kondisi / Minus</span>
                            <span class="font-bold text-emerald-700 text-sm mt-0.5 block">{{ $gecko->defect ?? 'Mulus / No Minus' }}</span>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-xl">
                            <span class="text-slate-400 block font-medium">Jenis Kelamin</span>
                            <span class="font-bold text-slate-800 text-sm mt-0.5 block">{{ $gecko->gender }}</span>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-xl">
                            <span class="text-slate-400 block font-medium">Estimasi Umur</span>
                            <span class="font-bold text-slate-800 text-sm mt-0.5 block">{{ $gecko->age }}</span>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-xl col-span-2">
                            <span class="text-slate-400 block font-medium">Pola Makan (Feeding)</span>
                            <span class="font-bold text-slate-800 text-sm mt-0.5 block">{{ $gecko->feeding }}</span>
                        </div>
                    </div>
                </div>

                <!-- Description / Lineage Notes -->
                @if($gecko->description)
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-2">
                    <h3 class="font-bold text-slate-900 text-sm">Catatan Perawatan & Lineage</h3>
                    <p class="text-xs text-slate-600 leading-relaxed whitespace-pre-line">{{ $gecko->description }}</p>
                </div>
                @endif

               <!-- CTA Button & Salin Link -->
                <div class="pt-2">
                    <div class="flex items-center gap-3">
                        @if($gecko->status === 'READY STOCK')
                        <a href="{{ $waLink }}" target="_blank" class="flex-1 py-3.5 px-5 rounded-2xl bg-emerald-500 hover:bg-emerald-600 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2.5 transition shadow-lg shadow-emerald-500/20">
                            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                            <span class="truncate">Pesan via WhatsApp</span>
                        </a>
                        @else
                        <button disabled class="flex-1 py-3.5 px-5 rounded-2xl bg-slate-200 text-slate-400 font-bold text-xs sm:text-sm cursor-not-allowed">
                            Gecko Sudah Terjual
                        </button>
                        @endif

                        <!-- Tombol Salin Link -->
                        <button type="button" onclick="copyDetailLink(this)" class="py-3.5 px-4 rounded-2xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs sm:text-sm flex items-center justify-center gap-2 transition shadow-sm flex-shrink-0" title="Salin Link Gecko">
                            <svg class="w-5 h-5 text-slate-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                            <span id="copyBtnText" class="hidden sm:inline">Salin Link</span>
                        </button>
                    </div>
                </div>

            </div> <!-- PENUTUP KOLOM KANAN (lg:col-span-5) -->
        </div> <!-- PENUTUP GRID UTAMA (grid-cols-12) -->

        <!-- OTHER GECKOS RECOMMENDATION (SEKARANG SUDAH FULL WIDTH DIPOSISI LUAR GRID) -->
        @if(count($otherGeckos) > 0)
        <div class="mt-16 sm:mt-20 pt-8 sm:pt-10 border-t border-slate-200/80">
            <div class="mb-6">
                <span class="text-[11px] sm:text-xs font-bold tracking-widest text-emerald-600 uppercase">Rekomendasi</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mt-0.5">Pilihan Gecko Lainnya</h2>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                @foreach($otherGeckos as $item)
                <a href="{{ route('gecko.show', $item->id) }}" class="group bg-white rounded-3xl p-3 border border-slate-100 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between">
                    <div>
                        <!-- Thumbnail Image (Aspect 4/3 & Object Contain) -->
                        <div class="relative rounded-2xl overflow-hidden aspect-[4/3] bg-slate-900/5 flex items-center justify-center mb-3">
                            <img src="{{ \Illuminate\Support\Str::startsWith($item->image, 'http') ? $item->image : asset('storage/' . $item->image) }}" alt="{{ $item->morph }}" class="w-full h-full object-contain p-1.5 group-hover:scale-105 transition duration-300">
                            
                            <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-full text-[9px] font-bold tracking-wider text-white {{ $item->status === 'READY STOCK' ? 'bg-emerald-500' : 'bg-rose-500' }}">
                                {{ $item->status }}
                            </span>
                        </div>

                        <!-- Details -->
                        <div class="px-1">
                            <span class="text-[10px] sm:text-xs font-semibold text-slate-400 block">{{ $item->code_name }}</span>
                            <h3 class="font-bold text-xs sm:text-sm text-slate-900 group-hover:text-emerald-600 transition mb-1 truncate">{{ $item->morph }}</h3>
                            <div class="text-xs sm:text-sm font-extrabold text-slate-900">
                                Rp {{ number_format($item->price, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif
    </main>

    <!-- SCRIPT COPY LINK -->
    <script>
        function switchImage(src, btn) {
            document.getElementById('activeImage').src = src;
            document.querySelectorAll('.thumb-btn').forEach(el => {
                el.classList.remove('border-emerald-500', 'scale-95');
                el.classList.add('border-slate-200');
            });
            btn.classList.remove('border-slate-200');
            btn.classList.add('border-emerald-500', 'scale-95');
        }

        function copyDetailLink(btn) {
            navigator.clipboard.writeText(window.location.href).then(() => {
                const textSpan = document.getElementById('copyBtnText');
                const originalText = textSpan ? textSpan.innerText : '';
                
                if (textSpan) textSpan.innerText = 'Tersalin!';
                btn.classList.add('bg-emerald-100', 'text-emerald-700');
                
                setTimeout(() => {
                    if (textSpan) textSpan.innerText = originalText || 'Salin Link';
                    btn.classList.remove('bg-emerald-100', 'text-emerald-700');
                }, 2000);
            });
        }
    </script>
</body>
</html>