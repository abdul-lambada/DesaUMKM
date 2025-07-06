@extends('layouts.public')

@section('title', 'Feedback Desa')

@section('content')
<div id="feedback-app">
    <feedback-list :feedback-data='@json($feedback)'></feedback-list>
</div>
@endsection

@push('scripts')
<script type="module" src="/resources/js/components/public/FeedbackList.vue"></script>
@endpush 