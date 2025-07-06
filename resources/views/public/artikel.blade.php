@extends('layouts.public')

@section('title', 'Artikel Desa')

@section('content')
<div id="artikel-app" data-aos="fade-up" data-aos-duration="1000" data-artikel-data='@json($artikel)'>
    <artikel-list :artikel-data="artikelData"></artikel-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/ArtikelList.vue"></script>
@endpush 