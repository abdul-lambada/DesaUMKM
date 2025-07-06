@extends('layouts.public')

@section('title', 'Map Desa')

@section('content')
<div id="mappoint-app" data-aos="fade-up" data-aos-duration="1000" data-mappoint-data='@json($mappoint)'>
    <mappoint-list :mappoint-data="mappointData"></mappoint-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/MapPointList.vue"></script>
@endpush 