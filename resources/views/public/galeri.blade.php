@extends('layouts.public')

@section('title', 'Galeri Desa')

@section('content')
<div id="galeri-app" data-aos="fade-up" data-aos-duration="1000">
    <galeri-list :galeri-data='@json($galeri)'></galeri-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/GaleriList.vue"></script>
@endpush 