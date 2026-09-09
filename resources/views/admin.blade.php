<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Exotic Gecko Studio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen antialiased">

    <!-- TOPBAR -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-slate-900 text-white font-bold flex items-center justify-center text-xs">E</div>
                <span class="font-semibold text-slate-900 text-sm tracking-tight">Admin Dashboard</span>
            </div>
            <a href="{{ route('landing') }}" class="text-xs font-medium px-3.5 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 transition flex items-center gap-2">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Lihat Storefront User
            </a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-8">
        @if(session('success'))
        <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-medium flex justify-between items-center">
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-700">&times;</button>
        </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
            <div class="bg-white p-5 rounded-xl border border-slate-200/80 shadow-sm">
                <span class="text-xs font-medium text-slate-500">Total Gecko</span>
                <span class="block text-2xl font-bold text-slate-900 mt-1">{{ $totalGecko }}</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-slate-200/80 shadow-sm">
                <span class="text-xs font-medium text-slate-500">Ready Stock</span>
                <span class="block text-2xl font-bold text-emerald-600 mt-1">{{ $readyStock }}</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-slate-200/80 shadow-sm">
                <span class="text-xs font-medium text-slate-500">Terjual</span>
                <span class="block text-2xl font-bold text-slate-400 mt-1">{{ $terjual }}</span>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
            <div>
                <h1 class="text-xl font-bold text-slate-900">Kelola Data Gecko</h1>
                <p class="text-xs text-slate-500 mt-0.5">Manajemen inventaris, foto galeri, dan kelengkapan data.</p>
            </div>
            <button onclick="openModal('addModal')" class="px-4 py-2.5 rounded-lg bg-slate-900 hover:bg-slate-800 text-white font-medium text-xs transition flex items-center justify-center gap-2 shadow-sm">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Gecko Baru
            </button>
        </div>

        <!-- TABLE -->
        <div class="bg-white rounded-xl border border-slate-200/80 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 text-slate-500 uppercase font-semibold text-[11px] tracking-wider border-b border-slate-200">
                        <tr>
                            <th class="p-4">Gecko</th>
                            <th class="p-4">Morph</th>
                            <th class="p-4">Kondisi / DOB</th>
                            <th class="p-4">Harga</th>
                            <th class="p-4">Status</th>
                            <th class="p-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                        @forelse($geckos as $gecko)
                        <tr class="hover:bg-slate-50/60 transition">
                            <td class="p-4 flex items-center gap-3">
                                <img src="{{ \Illuminate\Support\Str::startsWith($gecko->image, 'http') ? $gecko->image : asset('storage/' . $gecko->image) }}" alt="{{ $gecko->morph }}" class="w-10 h-10 rounded-lg object-cover bg-slate-100 border border-slate-200">
                                <div>
                                    <span class="font-semibold text-slate-900 text-sm block">{{ $gecko->code_name }}</span>
                                    <span class="text-[10px] text-slate-400">#GECKO-{{ $gecko->id }}</span>
                                </div>
                            </td>
                            <td class="p-4 font-semibold text-slate-900">{{ $gecko->morph }}</td>
                            <td class="p-4 text-slate-500">
                                <span class="block text-slate-800 font-semibold">{{ $gecko->defect ?? 'Mulus / No Minus' }}</span>
                                <span class="text-[10px] text-slate-400">DOB: {{ $gecko->dob ?? '-' }}</span>
                            </td>
                            <td class="p-4 font-bold text-slate-900">
                                Rp {{ number_format($gecko->price, 0, ',', '.') }}
                            </td>
                            <td class="p-4">
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-semibold {{ $gecko->status === 'READY STOCK' ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-slate-100 text-slate-500 border border-slate-200' }}">
                                    {{ $gecko->status }}
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('gecko.show', $gecko->id) }}" target="_blank" class="px-2.5 py-1.5 rounded-md bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-medium transition">
                                        Preview
                                    </a>
                                    <button onclick="editGecko({{ json_encode($gecko) }})" class="px-3 py-1.5 rounded-md border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-medium transition">
                                        Edit
                                    </button>
                                    <form action="{{ route('admin.destroy', $gecko->id) }}" method="POST" onsubmit="return confirm('Hapus data gecko ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 rounded-md bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 text-xs font-medium transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-slate-400">Belum ada data gecko. Silakan tambah data baru.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- MODAL TAMBAH -->
    <div id="addModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white border border-slate-200 rounded-xl w-full max-w-xl p-6 space-y-4 shadow-xl max-h-[90vh] overflow-y-auto">
            <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                <h3 class="font-bold text-slate-900 text-sm">Tambah Gecko Baru</h3>
                <button onclick="closeModal('addModal')" class="text-slate-400 hover:text-slate-600">&times;</button>
            </div>
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="space-y-3 text-xs">
                @csrf
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Kode / Nama</label>
                        <input type="text" name="code_name" required placeholder="Gufron" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Morph</label>
                        <input type="text" name="morph" required placeholder="Tangerine" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Tanggal Lahir (DOB)</label>
                        <input type="text" name="dob" placeholder="12 Jan 2025" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Kondisi / Cacat</label>
                        <input type="text" name="defect" placeholder="Mulus / No Minus" value="Mulus / No Minus" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Gender</label>
                        <select name="gender" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unsex">Unsex</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Umur</label>
                        <input type="text" name="age" required placeholder="1 THN" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Feeding</label>
                        <input type="text" name="feeding" value="Feeder aktif" required class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Harga (Rp)</label>
                        <input type="number" name="price" required placeholder="200000" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Status</label>
                        <select name="status" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                            <option value="READY STOCK">READY STOCK</option>
                            <option value="TERJUAL">TERJUAL</option>
                            <option value="RESERVED">RESERVED</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block font-medium text-slate-600 mb-1">Deskripsi / Catatan Lineage</label>
                    <textarea name="description" rows="2" placeholder="Informasi genetik orang tua, pola makan, atau catatan spesial..." class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900"></textarea>
                </div>

                <div>
                    <label class="block font-medium text-slate-600 mb-1">Foto Sampul Utama (Wajib)</label>
                    <input type="file" name="image" accept="image/*" required class="w-full bg-white border border-slate-200 rounded-lg p-2 text-slate-900 text-xs focus:outline-none focus:border-slate-900">
                </div>

                <div>
                    <label class="block font-medium text-slate-600 mb-1">Galeri Foto Tambahan (Bisa Upload Banyak Foto)</label>
                    <input type="file" name="images[]" accept="image/*" multiple class="w-full bg-white border border-slate-200 rounded-lg p-2 text-slate-900 text-xs focus:outline-none focus:border-slate-900">
                    <p class="text-[10px] text-slate-400 mt-1">Pilih beberapa foto sekaligus dari PC untuk ditampilkan di halaman detail.</p>
                </div>

                <div class="pt-3 flex justify-end gap-2 border-t border-slate-100">
                    <button type="button" onclick="closeModal('addModal')" class="px-4 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium">Batal</button>
                    <button type="submit" class="px-4 py-2 rounded-lg bg-slate-900 hover:bg-slate-800 text-white font-medium">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>

    <!-- SECTION KELOLA TESTIMONI -->
<div class="mt-12 bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm space-y-6">
    <div>
        <h2 class="text-xl font-bold text-slate-900">Kelola Testimoni Pembeli</h2>
        <p class="text-xs text-slate-500">Tambah ulasan kepuasan pelanggan untuk ditampilkan di Landing Page.</p>
    </div>

    <!-- Form Tambah Testimoni -->
    <form action="{{ route('admin.testimonials.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 bg-slate-50 p-5 rounded-2xl border border-slate-100">
        @csrf
        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Nama Pembeli</label>
            <input type="text" name="client_name" required placeholder="Contoh: Dimas R." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-emerald-500 outline-none">
        </div>
        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Kota / Lokasi</label>
            <input type="text" name="city" placeholder="Contoh: Jakarta Selatan" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-emerald-500 outline-none">
        </div>
        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Morph yang Diadopsi</label>
            <input type="text" name="morph_adopted" placeholder="Contoh: DB Raptor" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-emerald-500 outline-none">
        </div>
        <div>
            <label class="block text-xs font-semibold text-slate-700 mb-1">Rating Bintang</label>
            <select name="rating" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                <option value="5">⭐⭐⭐⭐⭐ (5 Bintang)</option>
                <option value="4">⭐⭐⭐⭐ (4 Bintang)</option>
            </select>
        </div>
        <div class="sm:col-span-2 lg:col-span-3">
            <label class="block text-xs font-semibold text-slate-700 mb-1">Isi Ulasan / Testimoni</label>
            <textarea name="review" required rows="2" placeholder="Tuliskan ulasan chat WA dari pembeli..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-emerald-500 outline-none"></textarea>
        </div>
        <div class="flex items-end">
            <button type="submit" class="w-full py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs transition shadow-sm">
                + Simpan Testimoni
            </button>
        </div>
    </form>

    <!-- Tabel Daftar Testimoni -->
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead>
                <tr class="border-b border-slate-200 text-slate-400 uppercase font-bold">
                    <th class="py-3 px-2">Nama</th>
                    <th class="py-3 px-2">Kota</th>
                    <th class="py-3 px-2">Morph</th>
                    <th class="py-3 px-2">Ulasan</th>
                    <th class="py-3 px-2 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($testimonials as $item)
                <tr class="hover:bg-slate-50/80 transition">
                    <td class="py-3 px-2 font-bold text-slate-800">{{ $item->client_name }}</td>
                    <td class="py-3 px-2 text-slate-500">{{ $item->city ?? '-' }}</td>
                    <td class="py-3 px-2 font-semibold text-emerald-600">{{ $item->morph_adopted ?? '-' }}</td>
                    <td class="py-3 px-2 text-slate-600 max-w-xs truncate">{{ $item->review }}</td>
                    <td class="py-3 px-2 text-right">
                        <form action="{{ route('admin.testimonials.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus testimoni ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-rose-600 hover:text-rose-800 font-bold text-xs">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-6 text-center text-slate-400 italic">Belum ada testimoni. Tambahkan testimoni pertamamu di atas!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

    <!-- MODAL EDIT -->
    <div id="editModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white border border-slate-200 rounded-xl w-full max-w-xl p-6 space-y-4 shadow-xl max-h-[90vh] overflow-y-auto">
            <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                <h3 class="font-bold text-slate-900 text-sm">Edit Data Gecko</h3>
                <button onclick="closeModal('editModal')" class="text-slate-400 hover:text-slate-600">&times;</button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data" class="space-y-3 text-xs">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Kode / Nama</label>
                        <input type="text" id="edit_code_name" name="code_name" required class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Morph</label>
                        <input type="text" id="edit_morph" name="morph" required class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Tanggal Lahir (DOB)</label>
                        <input type="text" id="edit_dob" name="dob" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Kondisi / Cacat</label>
                        <input type="text" id="edit_defect" name="defect" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Gender</label>
                        <select id="edit_gender" name="gender" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unsex">Unsex</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Umur</label>
                        <input type="text" id="edit_age" name="age" required class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Feeding</label>
                        <input type="text" id="edit_feeding" name="feeding" required class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Harga (Rp)</label>
                        <input type="number" id="edit_price" name="price" required class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                    </div>
                    <div>
                        <label class="block font-medium text-slate-600 mb-1">Status</label>
                        <select id="edit_status" name="status" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900">
                            <option value="READY STOCK">READY STOCK</option>
                            <option value="TERJUAL">TERJUAL</option>
                            <option value="RESERVED">RESERVED</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block font-medium text-slate-600 mb-1">Deskripsi / Catatan Lineage</label>
                    <textarea id="edit_description" name="description" rows="2" class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-slate-900 focus:outline-none focus:border-slate-900"></textarea>
                </div>

                <div>
                    <label class="block font-medium text-slate-600 mb-1">Ganti Foto Sampul Utama (Opsional)</label>
                    <input type="file" name="image" accept="image/*" class="w-full bg-white border border-slate-200 rounded-lg p-2 text-slate-900 text-xs focus:outline-none focus:border-slate-900">
                </div>

                <div>
                    <label class="block font-medium text-slate-600 mb-1">Ganti Galeri Foto Tambahan (Opsional)</label>
                    <input type="file" name="images[]" accept="image/*" multiple class="w-full bg-white border border-slate-200 rounded-lg p-2 text-slate-900 text-xs focus:outline-none focus:border-slate-900">
                </div>

                <div class="pt-3 flex justify-end gap-2 border-t border-slate-100">
                    <button type="button" onclick="closeModal('editModal')" class="px-4 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium">Batal</button>
                    <button type="submit" class="px-4 py-2 rounded-lg bg-slate-900 hover:bg-slate-800 text-white font-medium">Update Data</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

        function editGecko(gecko) {
            document.getElementById('editForm').action = '/admin/geckos/' + gecko.id;
            document.getElementById('edit_code_name').value = gecko.code_name;
            document.getElementById('edit_morph').value = gecko.morph;
            document.getElementById('edit_dob').value = gecko.dob || '';
            document.getElementById('edit_defect').value = gecko.defect || 'Mulus / No Minus';
            document.getElementById('edit_gender').value = gecko.gender;
            document.getElementById('edit_age').value = gecko.age;
            document.getElementById('edit_feeding').value = gecko.feeding;
            document.getElementById('edit_price').value = gecko.price;
            document.getElementById('edit_status').value = gecko.status;
            document.getElementById('edit_description').value = gecko.description || '';
            openModal('editModal');
        }
    </script>
</body>
</html>