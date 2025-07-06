<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Desa UMKM')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-30">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <a href="/" class="text-2xl font-bold text-blue-700 flex items-center gap-2">
                <span class="inline-block"><svg width="28" height="28" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#2563eb"/><path d="M12 6v6l4 2" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                Desa UMKM
            </a>
            <nav class="hidden md:flex space-x-6 items-center">
                <div class="flex space-x-6">
                    <a href="/" class="@if(request()->routeIs('public.home')) text-blue-700 font-bold underline @else hover:text-blue-600 font-medium transition-colors @endif">Beranda</a>
                    <a href="/wisata" class="@if(request()->routeIs('public.wisata')) text-blue-700 font-bold underline @else hover:text-blue-600 font-medium transition-colors @endif">Wisata</a>
                    <a href="/umkm" class="@if(request()->routeIs('public.umkm')) text-blue-700 font-bold underline @else hover:text-blue-600 font-medium transition-colors @endif">UMKM</a>
                </div>
                <div class="relative group ml-6">
                    <button class="flex items-center gap-1 hover:text-blue-600 font-medium transition-colors focus:outline-none">
                        Menu Lain
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-56 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 group-hover:visible invisible transition-all z-40">
                        <a href="/produk" class="block px-4 py-2 @if(request()->routeIs('public.produk')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Produk</a>
                        <a href="/event" class="block px-4 py-2 @if(request()->routeIs('public.event')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Event</a>
                        <a href="/homestay" class="block px-4 py-2 @if(request()->routeIs('public.homestay')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Homestay</a>
                        <a href="/artikel" class="block px-4 py-2 @if(request()->routeIs('public.artikel')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Artikel</a>
                        <a href="/galeri" class="block px-4 py-2 @if(request()->routeIs('public.galeri')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Galeri</a>
                        <a href="/komunitas" class="block px-4 py-2 @if(request()->routeIs('public.komunitas')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Komunitas</a>
                        <a href="/booking" class="block px-4 py-2 @if(request()->routeIs('public.booking')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Booking</a>
                        <a href="/feedback" class="block px-4 py-2 @if(request()->routeIs('public.feedback')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Feedback</a>
                        <a href="/surat-online" class="block px-4 py-2 @if(request()->routeIs('public.suratOnline')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Surat Online</a>
                        <a href="/mappoint" class="block px-4 py-2 @if(request()->routeIs('public.mappoint')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Map</a>
                    </div>
                </div>
            </nav>
            <!-- Hamburger -->
            <button id="nav-toggle" class="md:hidden text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-200 p-2 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
        </div>
        <!-- Mobile Nav -->
        <div id="mobile-nav" class="md:hidden hidden bg-white border-t shadow px-4 pb-4">
            <div class="flex flex-col gap-2 mb-2">
                <a href="/" class="@if(request()->routeIs('public.home')) text-blue-700 font-bold underline @else hover:text-blue-600 font-medium transition-colors @endif">Beranda</a>
                <a href="/wisata" class="@if(request()->routeIs('public.wisata')) text-blue-700 font-bold underline @else hover:text-blue-600 font-medium transition-colors @endif">Wisata</a>
                <a href="/umkm" class="@if(request()->routeIs('public.umkm')) text-blue-700 font-bold underline @else hover:text-blue-600 font-medium transition-colors @endif">UMKM</a>
                <button id="mobile-dropdown-toggle" class="flex items-center gap-1 mt-2 py-2 px-2 rounded hover:bg-blue-50 focus:outline-none">
                    Menu Lain
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="mobile-dropdown" class="hidden flex-col gap-1 mt-1 ml-2">
                    <a href="/produk" class="@if(request()->routeIs('public.produk')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Produk</a>
                    <a href="/event" class="@if(request()->routeIs('public.event')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Event</a>
                    <a href="/homestay" class="@if(request()->routeIs('public.homestay')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Homestay</a>
                    <a href="/artikel" class="@if(request()->routeIs('public.artikel')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Artikel</a>
                    <a href="/galeri" class="@if(request()->routeIs('public.galeri')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Galeri</a>
                    <a href="/komunitas" class="@if(request()->routeIs('public.komunitas')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Komunitas</a>
                    <a href="/booking" class="@if(request()->routeIs('public.booking')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Booking</a>
                    <a href="/feedback" class="@if(request()->routeIs('public.feedback')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Feedback</a>
                    <a href="/surat-online" class="@if(request()->routeIs('public.suratOnline')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Surat Online</a>
                    <a href="/mappoint" class="@if(request()->routeIs('public.mappoint')) text-blue-700 font-bold underline @else hover:bg-blue-50 transition @endif">Map</a>
                </div>
            </div>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const btn = document.getElementById('nav-toggle');
                const nav = document.getElementById('mobile-nav');
                btn && btn.addEventListener('click', () => nav.classList.toggle('hidden'));
                const ddToggle = document.getElementById('mobile-dropdown-toggle');
                const dd = document.getElementById('mobile-dropdown');
                ddToggle && ddToggle.addEventListener('click', () => dd.classList.toggle('hidden'));
            });
            </script>
        </div>
    </header>
    <!-- Content -->
    <main class="flex-1 container mx-auto px-4 py-8">
        @yield('content')
    </main>
    <!-- Footer -->
    <footer class="bg-gray-900 border-t mt-8">
        <div class="container mx-auto px-4 py-8 text-center text-gray-300 text-sm flex flex-col items-center gap-2">
            <div class="mb-1 font-semibold text-lg text-white">Desa UMKM</div>
            <div class="mb-1">Alamat: Jl. Raya Desa UMKM No. 1, Indonesia</div>
            <div class="mb-1">Email: <a href="mailto:info@desa-umkm.id" class="text-blue-400 hover:underline">info@desa-umkm.id</a></div>
            <div class="flex gap-6 justify-center mt-2">
                <a href="#" class="hover:text-blue-400 flex items-center transition-colors" title="Instagram"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5A4.25 4.25 0 0 1 16.25 20.5h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5zm4.25 2.75a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5zm0 1.5a3.25 3.25 0 1 1 0 6.5 3.25 3.25 0 0 1 0-6.5zm5.25 1.25a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg></a>
                <a href="#" class="hover:text-blue-400 flex items-center transition-colors" title="Facebook"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.6 0 0 .6 0 1.326v21.348C0 23.4.6 24 1.326 24h11.495v-9.294H9.692v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.4 24 24 23.4 24 22.674V1.326C24 .6 23.4 0 22.675 0"/></svg></a>
                <a href="#" class="hover:text-blue-400 flex items-center transition-colors" title="WhatsApp"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.031-.967-.273-.099-.472-.148-.67.15-.198.297-.767.967-.94 1.166-.173.198-.347.223-.644.075-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.611-.916-2.206-.242-.579-.487-.5-.669-.51-.173-.008-.372-.01-.571-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.077 4.363.71.306 1.263.489 1.694.626.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.288.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg></a>
            </div>
            <div class="mt-4 text-xs text-gray-500">&copy; {{ date('Y') }} Desa UMKM. All rights reserved.</div>
        </div>
    </footer>
</body>
</html> 