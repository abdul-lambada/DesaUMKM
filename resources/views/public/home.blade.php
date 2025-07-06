@extends('layouts.public')

@section('title', 'Beranda Desa UMKM')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-100 to-green-100 rounded-xl p-8 mb-8 flex flex-col md:flex-row items-center justify-between gap-8">
    <div class="flex-1">
        <h1 class="text-4xl md:text-5xl font-extrabold text-blue-700 mb-4">Selamat Datang di Desa UMKM</h1>
        <p class="text-lg text-gray-700 mb-6">Jelajahi potensi desa, temukan produk UMKM, wisata, event, dan berbagai keunikan yang kami tawarkan. Dukung pertumbuhan ekonomi lokal dan rasakan pengalaman terbaik di Desa UMKM!</p>
        <a href="#umkm-list" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">Jelajahi Desa UMKM</a>
    </div>
    <div class="flex-1 flex justify-center">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=500&q=80" alt="Desa UMKM" class="rounded-xl shadow-lg w-full max-w-xs md:max-w-md">
    </div>
</section>
<!-- Info Section -->
<section class="mb-10 text-center">
    <h2 class="text-2xl font-bold text-gray-800 mb-2">Kenapa Pilih Desa UMKM?</h2>
    <p class="text-gray-600 max-w-2xl mx-auto">Desa UMKM menghadirkan pengalaman otentik, produk unggulan, wisata menarik, dan interaksi langsung dengan masyarakat lokal. Setiap kunjungan dan transaksi mendukung pertumbuhan UMKM serta pelestarian budaya desa.</p>
</section>
<!-- Produk Unggulan Section -->
<section class="mb-12 animate-fadeIn">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Produk Unggulan Desa</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($produk as $item)
        <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
            <div class="relative mb-4">
                <img src="{{ $item->image ?? 'https://via.placeholder.com/150' }}" alt="{{ $item->name }}" class="w-32 h-32 object-cover rounded-full border-4 border-blue-100 group-hover:border-blue-400 transition">
                @if($item->stock < 5)
                <span class="absolute top-0 right-0 bg-red-500 text-white text-xs px-2 py-1 rounded-full shadow">Stok Tipis</span>
                @endif
            </div>
            <h3 class="font-bold text-lg mb-2 group-hover:text-blue-700 transition">{{ $item->name }}</h3>
            <p class="text-gray-600 text-center mb-2 line-clamp-2">{{ $item->description }}</p>
            <span class="text-blue-700 font-semibold text-lg">Rp {{ number_format($item->price,0,',','.') }}</span>
            <a href="#" class="mt-3 inline-block px-4 py-2 bg-blue-600 text-white rounded shadow hover:bg-blue-700 transition">Detail</a>
        </div>
        @empty
        <div class="col-span-3 text-center text-gray-400">Belum ada produk unggulan.</div>
        @endforelse
    </div>
</section>
<!-- Event Terbaru Section -->
<section class="mb-12 animate-fadeIn" style="animation-delay:0.1s;">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Event Terbaru</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @forelse($event as $item)
        <div class="bg-white rounded-xl shadow p-6 flex flex-col hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
            <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded self-start mb-2 animate-pulse">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('d F Y') }}</span>
            <h3 class="font-bold text-lg mb-2 group-hover:text-blue-700 transition">{{ $item->name }}</h3>
            <p class="text-gray-600 mb-2 line-clamp-2">{{ $item->description }}</p>
            <a href="#" class="text-blue-600 hover:underline font-semibold mt-auto transition">Lihat Detail</a>
        </div>
        @empty
        <div class="col-span-2 text-center text-gray-400">Belum ada event terbaru.</div>
        @endforelse
    </div>
</section>
<!-- Testimoni Section -->
<section class="mb-12 animate-fadeIn" style="animation-delay:0.2s;">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Apa Kata Mereka?</h2>
    <div class="flex flex-col md:flex-row gap-8 justify-center items-center">
        @forelse($feedback as $item)
        <div class="bg-gradient-to-br from-blue-50 to-green-50 rounded-xl shadow p-6 max-w-sm flex-1 hover:shadow-2xl transition group cursor-pointer">
            <p class="text-gray-700 italic mb-4 group-hover:text-blue-700 transition">"{{ $item->message }}"</p>
            <div class="flex items-center gap-3">
                <img src="https://randomuser.me/api/portraits/men/{{ 30+$loop->index }}.jpg" class="w-12 h-12 rounded-full border-2 border-blue-200 group-hover:border-blue-500 transition" alt="User">
                <div>
                    <div class="font-bold group-hover:text-blue-700 transition">{{ $item->name ?? 'Pengunjung' }}</div>
                    <div class="text-xs text-gray-500">{{ $item->email ?? 'User' }}</div>
                </div>
            </div>
        </div>
        @empty
        <div class="text-center text-gray-400">Belum ada testimoni.</div>
        @endforelse
    </div>
</section>
<!-- Galeri Foto Section -->
<section class="mb-12 animate-fadeIn" style="animation-delay:0.3s;">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Galeri Desa UMKM</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @forelse($galeri as $item)
        <div class="relative group cursor-pointer">
            <img src="{{ $item->image ?? 'https://via.placeholder.com/300x200' }}" alt="Galeri" class="rounded-xl shadow object-cover w-full h-40 group-hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 rounded-xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                <span class="text-white font-bold">Lihat Foto</span>
            </div>
        </div>
        @empty
        <div class="col-span-4 text-center text-gray-400">Belum ada foto galeri.</div>
        @endforelse
    </div>
</section>
<!-- Partner/Media Section -->
<section class="mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Partner & Media</h2>
    <div class="flex flex-wrap justify-center items-center gap-8">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Partner 1" class="h-10">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_Telkom_Indonesia.svg" alt="Partner 2" class="h-10">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Google.png" alt="Partner 3" class="h-10">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Go-jek_logo.svg" alt="Partner 4" class="h-10">
    </div>
</section>
<!-- CTA Section -->
<section class="mb-16 text-center">
    <div class="bg-blue-600 rounded-xl py-10 px-6 md:px-16 flex flex-col items-center justify-center shadow-lg">
        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Ayo Kunjungi & Dukung Desa UMKM!</h2>
        <p class="text-white text-lg mb-6 max-w-2xl">Bergabunglah bersama kami untuk memajukan desa, mendukung UMKM, dan menikmati pengalaman tak terlupakan. Mulai perjalananmu sekarang!</p>
        <a href="/umkm" class="inline-block bg-white text-blue-700 font-bold px-8 py-3 rounded-lg shadow hover:bg-gray-100 transition">Jelajahi UMKM</a>
    </div>
</section>
<!-- Kontak Section -->
<section class="mb-12 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Kontak Kami</h2>
    <div class="bg-white rounded-xl shadow p-8 flex flex-col md:flex-row gap-8">
        <form class="flex-1 flex flex-col gap-4">
            <input type="text" placeholder="Nama" class="border rounded px-4 py-2 focus:ring-2 focus:ring-blue-200" required>
            <input type="email" placeholder="Email" class="border rounded px-4 py-2 focus:ring-2 focus:ring-blue-200" required>
            <textarea placeholder="Pesan" rows="3" class="border rounded px-4 py-2 focus:ring-2 focus:ring-blue-200" required></textarea>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition">Kirim Pesan</button>
        </form>
        <div class="flex-1 flex flex-col justify-center">
            <div class="mb-2"><span class="font-bold">Alamat:</span> Jl. Raya Desa UMKM No. 1, Indonesia</div>
            <div class="mb-2"><span class="font-bold">Telepon:</span> 0812-3456-7890</div>
            <div class="mb-2"><span class="font-bold">Email:</span> info@desa-umkm.id</div>
            <div class="flex gap-3 mt-2">
                <a href="#" class="text-blue-600 hover:underline">Instagram</a>
                <a href="#" class="text-blue-600 hover:underline">Facebook</a>
                <a href="#" class="text-blue-600 hover:underline">WhatsApp</a>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section -->
<section class="mb-20 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">FAQ</h2>
    <div class="space-y-4" id="faq-accordion">
        <div class="bg-white rounded-xl shadow p-4">
            <button type="button" class="w-full text-left font-semibold text-blue-700 flex justify-between items-center faq-toggle">Apa itu Desa UMKM?
                <span class="ml-2">+</span>
            </button>
            <div class="faq-content hidden mt-2 text-gray-700">Desa UMKM adalah inisiatif untuk mengembangkan potensi desa melalui produk UMKM, wisata, event, dan kolaborasi masyarakat lokal.</div>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
            <button type="button" class="w-full text-left font-semibold text-blue-700 flex justify-between items-center faq-toggle">Bagaimana cara mendukung UMKM desa?
                <span class="ml-2">+</span>
            </button>
            <div class="faq-content hidden mt-2 text-gray-700">Anda dapat membeli produk, mengikuti event, atau mempromosikan desa melalui media sosial.</div>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
            <button type="button" class="w-full text-left font-semibold text-blue-700 flex justify-between items-center faq-toggle">Apakah bisa berkunjung langsung ke desa?
                <span class="ml-2">+</span>
            </button>
            <div class="faq-content hidden mt-2 text-gray-700">Tentu! Kami menyambut kunjungan wisatawan, silakan hubungi kontak yang tersedia untuk info lebih lanjut.</div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.faq-toggle').forEach(btn => {
            btn.addEventListener('click', function() {
                const content = this.parentElement.querySelector('.faq-content');
                content.classList.toggle('hidden');
                this.querySelector('span').textContent = content.classList.contains('hidden') ? '+' : '-';
            });
        });
    });
    </script>
</section>
@endsection 