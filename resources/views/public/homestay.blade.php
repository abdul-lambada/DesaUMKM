@extends('layouts.public')

@section('title', 'Homestay Desa')

@section('content')
<div id="homestay-app">
    <homestay-list :homestay-data='@json($homestay)'></homestay-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/HomestayList.vue"></script>
@endpush 