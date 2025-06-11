@extends('master.layout')

@section('content')
<div class="max-w-xl mx-auto mt-10 text-center">
    <h2 class="text-3xl font-bold text-green-600">Thank You for Your Payment!</h2>
    <p class="mt-4 text-lg">Your booking has been confirmed and payment is successful.</p>

    <div class="mt-6 p-4 bg-white rounded shadow">
        <h3 class="text-xl font-semibold mb-2">Booking Summary</h3>
        <p><strong>Court:</strong> {{ $booking->court }}</p>
        @if($booking->package)
            <p><strong>Package:</strong> {{ $booking->package }}</p>
            <p><strong>Start Date:</strong> {{ $booking->start_date }}</p>
            <p><strong>End Date:</strong> {{ $booking->end_date }}</p>
        @else
            <p><strong>Sport:</strong> {{ $booking->sport }}</p>
            <p><strong>Date:</strong> {{ $booking->start_date }}</p>
            <p><strong>Start Time:</strong> {{ $booking->start_time }}</p>
            <p><strong>Duration:</strong> {{ $booking->duration }}</p>
        @endif
    </div>
</div>
@endsection
