@extends('layouts.public')

@section('title', 'Artikel Desa')

@section('content')
<div id="artikel-app">
    <artikel-list :artikel-data='@json($artikel)'></artikel-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/ArtikelList.vue"></script>
@endpush 