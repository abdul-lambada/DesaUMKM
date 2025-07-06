<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Desa UMKM - Platform digital untuk mengembangkan usaha mikro, kecil, dan menengah di desa">
    
    <title>@yield('title', 'Desa UMKM') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <nav x-data="{ open: false, scrolled: false }" 
         @scroll.window="scrolled = window.pageYOffset > 50"
         :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg' : 'bg-transparent'"
         class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 w-full">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('public.home') }}" class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-home text-white text-lg"></i>
                        </div>
                        <span class="text-xl font-bold text-gray-800">Desa UMKM</span>
                    </a>
                </div>

                <!-- Desktop Navigation (Grouped) -->
                <div class="hidden md:flex flex-1 justify-center items-center space-x-6">
                    <a href="{{ route('public.home') }}" class="text-gray-700 hover:text-green-600 transition-colors duration-200 font-medium whitespace-nowrap {{ request()->routeIs('public.home') ? 'border-b-2 border-green-600 text-green-700 font-bold' : '' }}">Beranda</a>
                    <!-- Profil Desa Dropdown -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" @keydown.escape="open = false" type="button" class="flex items-center text-gray-700 hover:text-green-600 font-medium transition-colors duration-200 whitespace-nowrap focus:outline-none {{ request()->routeIs('public.komunitas') || request()->routeIs('public.galeri') ? 'border-b-2 border-green-600 text-green-700 font-bold' : '' }}">
                            Profil Desa <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition class="absolute left-0 mt-2 w-44 bg-white rounded shadow-lg z-50 py-2">
                            <a href="{{ route('public.komunitas') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.komunitas') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Komunitas</a>
                            <a href="{{ route('public.galeri') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.galeri') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Galeri</a>
                        </div>
                    </div>
                    <!-- UMKM & Produk Dropdown -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" @keydown.escape="open = false" type="button" class="flex items-center text-gray-700 hover:text-green-600 font-medium transition-colors duration-200 whitespace-nowrap focus:outline-none {{ request()->routeIs('public.umkm') || request()->routeIs('public.produk') ? 'border-b-2 border-green-600 text-green-700 font-bold' : '' }}">
                            UMKM & Produk <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition class="absolute left-0 mt-2 w-44 bg-white rounded shadow-lg z-50 py-2">
                            <a href="{{ route('public.umkm') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.umkm') ? 'bg-green-100 text-green-700 font-bold' : '' }}">UMKM</a>
                            <a href="{{ route('public.produk') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.produk') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Produk</a>
                        </div>
                    </div>
                    <!-- Pariwisata Dropdown -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" @keydown.escape="open = false" type="button" class="flex items-center text-gray-700 hover:text-green-600 font-medium transition-colors duration-200 whitespace-nowrap focus:outline-none {{ request()->routeIs('public.wisata') || request()->routeIs('public.homestay') || request()->routeIs('public.event') ? 'border-b-2 border-green-600 text-green-700 font-bold' : '' }}">
                            Pariwisata <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition class="absolute left-0 mt-2 w-44 bg-white rounded shadow-lg z-50 py-2">
                            <a href="{{ route('public.wisata') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.wisata') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Wisata</a>
                            <a href="{{ route('public.homestay') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.homestay') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Homestay</a>
                            <a href="{{ route('public.event') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.event') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Event</a>
                        </div>
                    </div>
                    <!-- Layanan Publik Dropdown -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" @keydown.escape="open = false" type="button" class="flex items-center text-gray-700 hover:text-green-600 font-medium transition-colors duration-200 whitespace-nowrap focus:outline-none {{ request()->routeIs('public.suratOnline') || request()->routeIs('public.booking') || request()->routeIs('public.feedback') || request()->routeIs('public.mappoint') ? 'border-b-2 border-green-600 text-green-700 font-bold' : '' }}">
                            Layanan Publik <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition class="absolute left-0 mt-2 w-52 bg-white rounded shadow-lg z-50 py-2">
                            <a href="{{ route('public.suratOnline') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.suratOnline') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Surat Online</a>
                            <a href="{{ route('public.booking') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.booking') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Booking</a>
                            <a href="{{ route('public.feedback') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.feedback') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Feedback</a>
                            <a href="{{ route('public.mappoint') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('public.mappoint') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Peta</a>
                        </div>
                    </div>
                    <!-- Artikel -->
                    <a href="{{ route('public.artikel') }}" class="text-gray-700 hover:text-green-600 transition-colors duration-200 font-medium whitespace-nowrap {{ request()->routeIs('public.artikel') ? 'border-b-2 border-green-600 text-green-700 font-bold' : '' }}">Artikel</a>
                </div>

                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4 flex-shrink-0">
                    @auth
                        <a href="/admin" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors duration-200 font-medium">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-green-600 transition-colors duration-200 font-medium">Masuk</a>
                        <a href="{{ route('register') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors duration-200 font-medium">
                            Daftar
                        </a>
                    @endauth
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="open = !open" class="text-gray-700 hover:text-green-600 focus:outline-none focus:text-green-600 transition-colors duration-200">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" class="md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('public.home') }}" class="block px-3 py-2 text-gray-700 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 font-medium {{ request()->routeIs('public.home') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Beranda</a>
                <!-- Profil Desa Group -->
                <div x-data="{ open: false }" class="mb-1">
                    <button @click="open = !open" class="flex items-center w-full px-3 py-2 text-gray-700 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 font-medium focus:outline-none {{ request()->routeIs('public.komunitas') || request()->routeIs('public.galeri') ? 'bg-green-100 text-green-700 font-bold' : '' }}">
                        Profil Desa <i :class="open ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas ml-auto text-xs"></i>
                    </button>
                    <div x-show="open" x-transition class="pl-6">
                        <a href="{{ route('public.komunitas') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.komunitas') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Komunitas</a>
                        <a href="{{ route('public.galeri') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.galeri') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Galeri</a>
                    </div>
                </div>
                <!-- UMKM & Produk Group -->
                <div x-data="{ open: false }" class="mb-1">
                    <button @click="open = !open" class="flex items-center w-full px-3 py-2 text-gray-700 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 font-medium focus:outline-none {{ request()->routeIs('public.umkm') || request()->routeIs('public.produk') ? 'bg-green-100 text-green-700 font-bold' : '' }}">
                        UMKM & Produk <i :class="open ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas ml-auto text-xs"></i>
                    </button>
                    <div x-show="open" x-transition class="pl-6">
                        <a href="{{ route('public.umkm') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.umkm') ? 'bg-green-100 text-green-700 font-bold' : '' }}">UMKM</a>
                        <a href="{{ route('public.produk') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.produk') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Produk</a>
                    </div>
                </div>
                <!-- Pariwisata Group -->
                <div x-data="{ open: false }" class="mb-1">
                    <button @click="open = !open" class="flex items-center w-full px-3 py-2 text-gray-700 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 font-medium focus:outline-none {{ request()->routeIs('public.wisata') || request()->routeIs('public.homestay') || request()->routeIs('public.event') ? 'bg-green-100 text-green-700 font-bold' : '' }}">
                        Pariwisata <i :class="open ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas ml-auto text-xs"></i>
                    </button>
                    <div x-show="open" x-transition class="pl-6">
                        <a href="{{ route('public.wisata') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.wisata') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Wisata</a>
                        <a href="{{ route('public.homestay') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.homestay') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Homestay</a>
                        <a href="{{ route('public.event') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.event') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Event</a>
                    </div>
                </div>
                <!-- Layanan Publik Group -->
                <div x-data="{ open: false }" class="mb-1">
                    <button @click="open = !open" class="flex items-center w-full px-3 py-2 text-gray-700 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 font-medium focus:outline-none {{ request()->routeIs('public.suratOnline') || request()->routeIs('public.booking') || request()->routeIs('public.feedback') || request()->routeIs('public.mappoint') ? 'bg-green-100 text-green-700 font-bold' : '' }}">
                        Layanan Publik <i :class="open ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas ml-auto text-xs"></i>
                    </button>
                    <div x-show="open" x-transition class="pl-6">
                        <a href="{{ route('public.suratOnline') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.suratOnline') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Surat Online</a>
                        <a href="{{ route('public.booking') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.booking') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Booking</a>
                        <a href="{{ route('public.feedback') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.feedback') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Feedback</a>
                        <a href="{{ route('public.mappoint') }}" class="block px-3 py-2 text-gray-600 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 {{ request()->routeIs('public.mappoint') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Peta</a>
                    </div>
                </div>
                <!-- Artikel -->
                <a href="{{ route('public.artikel') }}" class="block px-3 py-2 text-gray-700 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 font-medium {{ request()->routeIs('public.artikel') ? 'bg-green-100 text-green-700 font-bold' : '' }}">Artikel</a>
                <!-- Auth Buttons -->
                @auth
                    <a href="/admin" class="block px-3 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors duration-200 font-medium">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="block px-3 py-2 text-gray-700 hover:text-green-600 hover:bg-gray-50 rounded-md transition-colors duration-200 font-medium">Masuk</a>
                    <a href="{{ route('register') }}" class="block px-3 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors duration-200 font-medium">Daftar</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-home text-white"></i>
                        </div>
                        <span class="text-lg font-bold">Desa UMKM</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Platform digital untuk mengembangkan usaha mikro, kecil, dan menengah di desa.
                    </p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Layanan</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('public.wisata') }}" class="hover:text-white transition-colors duration-200">Wisata</a></li>
                        <li><a href="{{ route('public.umkm') }}" class="hover:text-white transition-colors duration-200">UMKM</a></li>
                        <li><a href="{{ route('public.produk') }}" class="hover:text-white transition-colors duration-200">Produk</a></li>
                        <li><a href="{{ route('public.homestay') }}" class="hover:text-white transition-colors duration-200">Homestay</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Informasi</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('public.event') }}" class="hover:text-white transition-colors duration-200">Event</a></li>
                        <li><a href="{{ route('public.artikel') }}" class="hover:text-white transition-colors duration-200">Artikel</a></li>
                        <li><a href="{{ route('public.galeri') }}" class="hover:text-white transition-colors duration-200">Galeri</a></li>
                        <li><a href="{{ route('public.komunitas') }}" class="hover:text-white transition-colors duration-200">Komunitas</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-green-500"></i>
                            <span>info@desaumkm.com</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone text-green-500"></i>
                            <span>+62 123 456 789</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-green-500"></i>
                            <span>Desa UMKM, Indonesia</span>
                        </li>
                    </ul>
                    
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} Desa UMKM. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>

    @stack('scripts')
</body>
</html>
