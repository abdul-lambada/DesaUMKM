@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden pb-32">
    <!-- Background Video/Image -->
    <div class="absolute inset-0 bg-gradient-to-br from-green-600 via-blue-600 to-purple-700">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <div data-aos="fade-up" data-aos-delay="100">
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                <span class="block">Desa UMKM</span>
                <span class="block text-2xl sm:text-3xl lg:text-4xl font-medium text-green-300 mt-2">
                    Platform Digital untuk Desa
                </span>
            </h1>
            <p class="text-lg sm:text-xl lg:text-2xl mb-8 text-gray-200 max-w-3xl mx-auto leading-relaxed">
                Mengembangkan usaha mikro, kecil, dan menengah di desa melalui teknologi digital yang inovatif dan berkelanjutan.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('public.umkm') }}" 
                   class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                    <i class="fas fa-store mr-2"></i>
                    Jelajahi UMKM
                </a>
                <a href="{{ route('public.wisata') }}" 
                   class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 border border-white/30">
                    <i class="fas fa-map-marked-alt mr-2"></i>
                    Wisata Desa
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div data-aos="fade-up" data-aos-delay="100" class="text-center">
                <div class="text-4xl font-bold text-green-600 mb-2">
                    <span class="counter" data-target="150">0</span>+
                </div>
                <div class="text-gray-600 font-medium">UMKM Terdaftar</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">
                    <span class="counter" data-target="500">0</span>+
                </div>
                <div class="text-gray-600 font-medium">Produk Unggulan</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">
                    <span class="counter" data-target="50">0</span>+
                </div>
                <div class="text-gray-600 font-medium">Wisata Lokal</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" class="text-center">
                <div class="text-4xl font-bold text-orange-600 mb-2">
                    <span class="counter" data-target="1000">0</span>+
                </div>
                <div class="text-gray-600 font-medium">Pengunjung</div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Layanan Unggulan Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Berbagai layanan digital yang dirancang khusus untuk mengembangkan potensi desa dan UMKM
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- UMKM -->
            <div data-aos="fade-up" data-aos-delay="100" class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-store text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">UMKM Digital</h3>
                <p class="text-gray-600 mb-6">
                    Platform digital untuk mempromosikan dan mengembangkan usaha mikro, kecil, dan menengah di desa.
                </p>
                <a href="{{ route('public.umkm') }}" class="text-green-600 hover:text-green-700 font-semibold flex items-center">
                    Jelajahi UMKM
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <!-- Wisata -->
            <div data-aos="fade-up" data-aos-delay="200" class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-map-marked-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Wisata Desa</h3>
                <p class="text-gray-600 mb-6">
                    Destinasi wisata lokal yang menampilkan keindahan alam dan budaya desa yang unik.
                </p>
                <a href="{{ route('public.wisata') }}" class="text-blue-600 hover:text-blue-700 font-semibold flex items-center">
                    Jelajahi Wisata
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <!-- Homestay -->
            <div data-aos="fade-up" data-aos-delay="300" class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-home text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Homestay</h3>
                <p class="text-gray-600 mb-6">
                    Akomodasi lokal yang nyaman untuk pengalaman menginap yang autentik di desa.
                </p>
                <a href="{{ route('public.homestay') }}" class="text-purple-600 hover:text-purple-700 font-semibold flex items-center">
                    Lihat Homestay
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <!-- Event -->
            <div data-aos="fade-up" data-aos-delay="400" class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-orange-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-calendar-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Event & Festival</h3>
                <p class="text-gray-600 mb-6">
                    Berbagai acara dan festival yang menampilkan budaya dan kreativitas masyarakat desa.
                </p>
                <a href="{{ route('public.event') }}" class="text-orange-600 hover:text-orange-700 font-semibold flex items-center">
                    Lihat Event
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <!-- Produk -->
            <div data-aos="fade-up" data-aos-delay="500" class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-shopping-bag text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Produk Lokal</h3>
                <p class="text-gray-600 mb-6">
                    Produk-produk unggulan hasil kerajinan tangan dan olahan lokal masyarakat desa.
                </p>
                <a href="{{ route('public.produk') }}" class="text-red-600 hover:text-red-700 font-semibold flex items-center">
                    Beli Produk
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <!-- Komunitas -->
            <div data-aos="fade-up" data-aos-delay="600" class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-r from-teal-500 to-teal-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Komunitas</h3>
                <p class="text-gray-600 mb-6">
                    Wadah berkumpul dan berkolaborasi antar pelaku UMKM dan masyarakat desa.
                </p>
                <a href="{{ route('public.komunitas') }}" class="text-teal-600 hover:text-teal-700 font-semibold flex items-center">
                    Gabung Komunitas
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Latest Products Section -->
@if($produk->count() > 0)
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Produk Terbaru
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Temukan produk-produk unggulan terbaru dari UMKM desa kami
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($produk as $product)
            <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}" class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-green-100 to-blue-100 flex items-center justify-center">
                    <i class="fas fa-image text-4xl text-gray-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ $product->description }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <a href="{{ route('public.produk') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors duration-200">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('public.produk') }}" class="bg-green-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-700 transition-colors duration-200 inline-flex items-center">
                Lihat Semua Produk
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endif

<!-- Latest Events Section -->
@if($event->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Event Terbaru
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Jangan lewatkan event-event menarik yang akan datang
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach($event as $eventItem)
            <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}" class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-orange-100 to-red-100 flex items-center justify-center">
                    <i class="fas fa-calendar-alt text-4xl text-gray-400"></i>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <i class="fas fa-calendar mr-2"></i>
                        <span>{{ \Carbon\Carbon::parse($eventItem->date)->format('d M Y') }}</span>
                        <i class="fas fa-clock ml-4 mr-2"></i>
                        <span>{{ $eventItem->time }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $eventItem->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ $eventItem->description }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            {{ $eventItem->location }}
                        </span>
                        <a href="{{ route('public.event') }}" class="bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700 transition-colors duration-200">
                            Detail Event
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('public.event') }}" class="bg-orange-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-orange-700 transition-colors duration-200 inline-flex items-center">
                Lihat Semua Event
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endif

<!-- Testimonials Section -->
@if($feedback->count() > 0)
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Apa Kata Mereka
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Testimoni dari pengunjung dan pelaku UMKM yang telah merasakan manfaat platform kami
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($feedback as $feedbackItem)
            <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}" class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        {{ strtoupper(substr($feedbackItem->name ?? 'User', 0, 1)) }}
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">{{ $feedbackItem->name ?? 'Pengunjung' }}</h4>
                        <div class="flex text-yellow-400">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= ($feedbackItem->rating ?? 5) ? 'text-yellow-400' : 'text-gray-300' }}"></i>
                            @endfor
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"{{ $feedbackItem->message ?? 'Platform yang sangat membantu untuk mengembangkan UMKM desa.' }}"</p>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('public.feedback') }}" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition-colors duration-200 inline-flex items-center">
                Berikan Feedback
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endif

<!-- Gallery Section -->
@if($galeri->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Galeri Desa
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Dokumentasi visual keindahan dan aktivitas desa kami
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($galeri as $galleryItem)
            <div data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}" class="aspect-square bg-gradient-to-br from-green-100 to-blue-100 rounded-lg flex items-center justify-center hover:shadow-lg transition-all duration-300 transform hover:scale-105 cursor-pointer">
                <i class="fas fa-image text-3xl text-gray-400"></i>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('public.galeri') }}" class="bg-purple-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-purple-700 transition-colors duration-200 inline-flex items-center">
                Lihat Galeri Lengkap
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endif

<!-- Call to Action Section -->
<section class="py-20 bg-gradient-to-r from-green-600 via-blue-600 to-purple-700 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto text-center text-white px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
            Siap Bergabung dengan Desa UMKM?
        </h2>
        <p class="text-xl mb-8 text-gray-200">
            Mari bersama-sama mengembangkan potensi desa dan UMKM melalui teknologi digital yang inovatif.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('register') }}" 
               class="bg-white text-green-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-user-plus mr-2"></i>
                Daftar Sekarang
            </a>
            <a href="{{ route('public.umkm') }}" 
               class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 border border-white/30">
                <i class="fas fa-store mr-2"></i>
                Jelajahi UMKM
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Counter Animation
function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000; // 2 seconds
    const step = target / (duration / 16); // 60fps
    let current = 0;
    
    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        element.textContent = Math.floor(current);
    }, 16);
}

// Intersection Observer for counter animation
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counters = entry.target.querySelectorAll('.counter');
            counters.forEach(counter => {
                animateCounter(counter);
            });
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe statistics section
document.addEventListener('DOMContentLoaded', () => {
    const statsSection = document.querySelector('.bg-white');
    if (statsSection) {
        observer.observe(statsSection);
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>
@endpush
