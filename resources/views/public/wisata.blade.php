@extends('layouts.public')

@section('title', 'Wisata Desa')

@section('content')
<!-- Hero Section Wisata -->
<section class="bg-gradient-to-r from-blue-100 to-green-100 rounded-xl p-8 mb-8 flex flex-col md:flex-row items-center justify-between gap-8" data-aos="fade-up" data-aos-duration="800">
    <div class="flex-1" data-aos="fade-right" data-aos-delay="200">
        <h1 class="text-4xl md:text-5xl font-extrabold text-blue-700 mb-4">Jelajahi Wisata Desa</h1>
        <p class="text-lg text-gray-700 mb-6">Temukan destinasi wisata terbaik di desa kami. Nikmati keindahan alam, budaya, dan pengalaman unik bersama keluarga!</p>
    </div>
    <div class="flex-1 flex justify-center" data-aos="fade-left" data-aos-delay="400">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=500&q=80" alt="Wisata Desa" class="rounded-xl shadow-lg w-full max-w-xs md:max-w-md">
    </div>
</section>
<!-- Wisata List Section -->
<div id="wisata-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <wisata-list :wisata-data='@json($wisata)'></wisata-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/WisataList.vue"></script>
@endpush 