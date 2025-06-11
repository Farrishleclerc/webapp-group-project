@extends('master.layout')

@section('content')
<div class="min-h-screen bg-yellow-100 py-10 px-4">
    <div class="max-w-3xl mx-auto">

        {{-- Title & Back Button --}}
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold italic text-gray-800">💳 Payment</h2>
            <a href="{{ url()->previous() }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300 transition text-sm font-semibold">
                ← Back
            </a>
        </div>

        @php
            $booking = session('bookingData');
        @endphp

        @if($booking)
            <div class="bg-white shadow-lg rounded-xl p-6 space-y-4">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">📋 Booking Summary</h3>

                {{-- Common Field --}}
                <div class="text-gray-800">
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
            </div>

            <form method="POST" action="{{ route('payment.process') }}" class="mt-6 text-center">
                @csrf
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 shadow-md">
                    ✅ Confirm & Pay
                </button>
            </form>
        @else
            <div class="bg-white text-red-600 font-semibold p-4 rounded shadow">
                No booking data found.
            </div>
        @endif
    </div>
</div>
@endsection
