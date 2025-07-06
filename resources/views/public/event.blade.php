@extends('layouts.public')

@section('title', 'Event Desa')

@section('content')
<div id="event-app" data-aos="fade-up" data-aos-duration="1000" data-event-data='@json($event)'>
    <event-list :event-data="eventData"></event-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/EventList.vue"></script>
@endpush 