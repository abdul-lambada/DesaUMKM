@extends('layouts.public')

@section('title', 'Komunitas Desa')

@section('content')
<div id="komunitas-app" data-aos="fade-up" data-aos-duration="1000">
    <komunitas-list :komunitas-data='@json($komunitas)'></komunitas-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/KomunitasList.vue"></script>
@endpush 