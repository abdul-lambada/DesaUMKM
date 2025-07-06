@extends('layouts.public')

@section('title', 'Feedback Desa')

@section('content')
<div id="feedback-app" data-aos="fade-up" data-aos-duration="1000">
    <feedback-list :feedback-data='@json($feedback)'></feedback-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/FeedbackList.vue"></script>
@endpush 