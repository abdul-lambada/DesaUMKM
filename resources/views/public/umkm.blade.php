@extends('layouts.public')

@section('title', 'UMKM Desa')

@section('content')
<div id="umkm-app" data-aos="fade-up" data-aos-duration="1000">
    <umkm-list :umkm-data='@json($umkm)'></umkm-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/UmkmList.vue"></script>
@endpush 