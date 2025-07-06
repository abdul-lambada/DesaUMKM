@extends('layouts.public')

@section('title', 'Produk Desa')

@section('content')
<div id="produk-app">
    <produk-list :produk-data='@json($produk)'></produk-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/ProdukList.vue"></script>
@endpush 