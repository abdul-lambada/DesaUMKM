@extends('layouts.public')

@section('title', 'Produk Desa')

@section('content')
<div id="produk-app" data-aos="fade-up" data-aos-duration="1000" data-produk-data='@json($produk)'>
    <produk-list :produk-data="produkData"></produk-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/ProdukList.vue"></script>
@endpush 