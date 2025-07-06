@extends('layouts.public')

@section('title', 'Wisata Desa')

@section('content')
<!-- Wisata List Section -->
<div id="wisata-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-wisata-data='@json($wisata)'>
    <wisata-list :wisata-data="wisataData"></wisata-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/WisataList.vue"></script>
@endpush 