@extends('master.layout')


@section('title', 'Booking - FitPlex')

@section('content')
<div class="min-h-screen bg-yellow-100 py-10 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800 italic">🎾 Court Booking</h1>
            <a href="{{ url()->previous() }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300 transition text-sm font-semibold">
                ← Back
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
            <form method="POST" action="{{ route('booking.single.submit') }}" class="bg-white p-8 rounded-xl shadow-md space-y-6">
                @csrf

                @if(session('success'))
                    <div class="bg-green-100 text-green-800 p-3 rounded-lg shadow-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Select Sport</label>
                    <select name="sport" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
                        <option value="" disabled selected>Select a category</option>
                        @foreach($sports as $sport)
                            <option value="{{ $sport }}">{{ $sport }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Pick a Date</label>
                    <input type="date" name="date" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Start Time</label>
                    <select name="start_time" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                        <option disabled selected>Select a time</option>
                        <option value="08:00">08:00 AM</option>
                        <option value="10:00">10:00 AM</option>
                        <option value="12:00">12:00 PM</option>
                        <option value="14:00">02:00 PM</option>
                        <option value="16:00">04:00 PM</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Duration</label>
                    <select name="duration" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                        <option disabled selected>Select duration</option>
                        <option value="1 Hour">1 Hour</option>
                        <option value="2 Hours">2 Hours</option>
                        <option value="3 Hours">3 Hours</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Court</label>
                    <select name="court" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                        <option disabled selected>Select a court</option>
                        <option value="Court A">Court A</option>
                        <option value="Court B">Court B</option>
                        <option value="Court C">Court C</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
                    ✅ Confirm Booking
                </button>
            </form>

            <div class="rounded-xl overflow-hidden shadow-md">
                <img src="{{ asset('assets/img/salahuddin-court.png') }}" alt="Court Image" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</div>
@endsection
