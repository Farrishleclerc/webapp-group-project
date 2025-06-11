@extends('master.layout')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Your Profile</h2>

    <div class="mb-6">
        <h3 class="text-xl font-semibold">User Info</h3>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    </div>

    <div>
        <h3 class="text-xl font-semibold mb-2">Your Bookings</h3>
        @forelse ($bookings as $booking)
            <div class="border p-4 rounded mb-4 bg-yellow-50">
                <p><strong>Court:</strong> {{ $booking->court ?? 'N/A' }}</p>
                @if ($booking->package)
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
        @empty
            <p>No bookings found.</p>
        @endforelse
    </div>
</div>
@endsection
