@extends('master.layout')

@section('content')
<div class="min-h-screen bg-yellow-100 py-10 px-4">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-md">

        {{-- Profile Header --}}
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-6">
                {{-- User Avatar --}}
                <img src="{{ asset('assets/img/istockphoto-1337144146-612x612.jpg') }}" alt="User Photo" class="w-24 h-24 rounded-full shadow border-4 border-yellow-300">

                {{-- User Info --}}
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">{{ $user->name }}</h2>
                    <p class="text-gray-600 text-sm">{{ $user->email }}</p>
                </div>
            </div>
        </div>

        {{-- Bookings Section --}}
        <div>
            <h3 class="text-2xl font-semibold mb-4 text-gray-800">📅 Your Bookings</h3>

            @forelse ($bookings as $booking)
                <div class="border-l-4 border-yellow-400 bg-yellow-50 p-5 rounded-lg mb-4 shadow-sm hover:shadow-md transition">
                    <p class="text-gray-800"><strong>Court:</strong> {{ $booking->court ?? 'N/A' }}</p>

                    @if ($booking->package)
                        <p class="text-gray-700"><strong>🏷️ Package:</strong> {{ $booking->package }}</p>
                        <p class="text-gray-700"><strong>📅 Start Date:</strong> {{ $booking->start_date }}</p>
                        <p class="text-gray-700"><strong>📅 End Date:</strong> {{ $booking->end_date }}</p>
                    @else
                        <p class="text-gray-700"><strong>🏅 Sport:</strong> {{ $booking->sport }}</p>
                        <p class="text-gray-700"><strong>📆 Date:</strong> {{ $booking->start_date }}</p>
                        <p class="text-gray-700"><strong>⏰ Start Time:</strong> {{ $booking->start_time }}</p>
                        <p class="text-gray-700"><strong>⏳ Duration:</strong> {{ $booking->duration }}</p>
                    @endif
                </div>
            @empty
                <div class="text-gray-500 italic">No bookings found.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
