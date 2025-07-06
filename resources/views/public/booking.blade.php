@extends('layouts.public')

@section('title', 'Booking Desa')

@section('content')
<div id="booking-app">
    <booking-list :booking-data='@json($booking)'></booking-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/BookingList.vue"></script>
@endpush 