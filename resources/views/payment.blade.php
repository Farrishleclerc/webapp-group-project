@extends('master.layout')


@section('content')
<div class="max-w-xl mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4">Payment</h2>

    @php
    $booking = session('bookingData');
@endphp

@if($booking)
    <div class="p-4 bg-white shadow rounded">
        <h2 class="text-xl font-semibold mb-2">Booking Summary</h2>

        {{-- Common field --}}
        <p><strong>Court:</strong> {{ $booking['court'] ?? 'N/A' }}</p>

        {{-- Package Booking --}}
        @if(isset($booking['package']))
            <p><strong>Package:</strong> {{ $booking['package'] }}</p>
            <p><strong>Start Date:</strong> {{ $booking['start_date'] }}</p>
            <p><strong>End Date:</strong> {{ $booking['end_date'] }}</p>
        @endif

        {{-- Single Booking --}}
@if(isset($booking['sport']))
<p><strong>Sport:</strong> {{ $booking['sport'] }}</p>
<p><strong>Date:</strong> {{ $booking['start_date'] ?? $booking['date'] ?? 'N/A' }}</p>
<p><strong>Start Time:</strong> {{ $booking['start_time'] ?? 'N/A' }}</p>
<p><strong>Duration:</strong> {{ $booking['duration'] ?? 'N/A' }}</p>
@endif
    </div>

    <form method="POST" action="{{ route('payment.process') }}">
        @csrf
        <button type="submit" class="bg-green-600 text-white font-bold py-2 px-4 rounded hover:bg-green-700 transition">
            Confirm & Pay
        </button>
    </form>
@endif
@endsection
