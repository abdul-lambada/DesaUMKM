@extends('layouts.public')

@section('title', 'Surat Online Desa')

@section('content')
<div id="surat-online-app" data-aos="fade-up" data-aos-duration="1000" data-surat-online-data='@json($suratOnline)'>
    <surat-online-list :surat-online-data="suratOnlineData"></surat-online-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/SuratOnlineList.vue"></script>
@endpush 