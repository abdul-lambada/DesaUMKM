@extends('layouts.public')

@section('title', 'Booking Desa')

@section('content')
<div id="booking-app" data-aos="fade-up" data-aos-duration="1000" data-booking-data='@json($booking)'>
    <booking-list :booking-data="bookingData"></booking-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/BookingList.vue"></script>
@endpush 