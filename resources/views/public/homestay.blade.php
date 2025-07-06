@extends('layouts.public')

@section('title', 'Homestay Desa')

@section('content')
<div id="homestay-app" data-aos="fade-up" data-aos-duration="1000">
    <homestay-list :homestay-data='@json($homestay)'></homestay-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/HomestayList.vue"></script>
@endpush 