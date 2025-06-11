@extends('master.layout')

@section('title', 'Booking - FitPlex')

@section('content')
<div class="min-h-screen bg-yellow-100 py-10 px-4">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 items-start">
        <form method="POST" action="{{ route('booking.single.submit') }}" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
            @csrf
            <h2 class="text-2xl font-bold italic">Booking</h2>

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-2 rounded">{{ session('success') }}</div>
            @endif

            <div>
                <label class="block font-semibold">Select sport</label>
                <select name="sport" class="w-full border rounded px-3 py-2" required>
                    <option value="" disabled selected>Select a category</option>
                    @foreach($sports as $sport)
                        <option value="{{ $sport }}">{{ $sport }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-semibold">Pick a date</label>
                <input type="date" name="date" class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Select available start time</label>
                <select name="start_time" class="w-full border rounded px-3 py-2" required>
                    <option>Available timings for your selected date will be shown here</option>
                    <option value="08:00">08:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="12:00">12:00 PM</option>
                    <option value="14:00">02:00 PM</option>
                    <option value="16:00">04:00 PM</option>
                </select>
            </div>

            <div>
                <label class="block font-semibold">Select available duration</label>
                <select name="duration" class="w-full border rounded px-3 py-2" required>
                    <option>Available duration for your selected start time will be shown here</option>
                    <option value="1 Hour">1 Hour</option>
                    <option value="2 Hours">2 Hours</option>
                    <option value="3 Hours">3 Hours</option>
                </select>
            </div>

            <div>
                <label class="block font-semibold">Select court(s)</label>
                <select name="court" class="w-full border rounded px-3 py-2" required>
                    <option>No available court(s)</option>
                    <option value="Court A">Court A</option>
                    <option value="Court B">Court B</option>
                    <option value="Court C">Court C</option>
                </select>
            </div>

            <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600 transition">
                Submit
            </button>
        </form>

        <div class="rounded-lg overflow-hidden shadow-md">
            <img src="{{ asset('assets/img/salahuddin-court.png') }}" alt="Court" class="w-full h-auto object-cover">
        </div>
    </div>
</div>
@endsection
