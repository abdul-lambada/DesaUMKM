@extends('layouts.public')

@section('title', 'Map Desa')

@section('content')
<div id="mappoint-app">
    <mappoint-list :mappoint-data='@json($mappoint)'></mappoint-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/MapPointList.vue"></script>
@endpush 