<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function __construct()
    {
        // Only protect the submit methods with auth
        $this->middleware('auth')->only([
            'submitBooking',
            'submitSingleBooking'
        ]);
    }

    public function showBooking($package)
    {
        $data = [
            'package' => $package,
            'start_date' => now()->format('d/m/Y -- l'),
            'end_date' => now()->addDays(3)->format('d/m/Y -- l'),
            'court' => $package === 'A' ? 'Mahallah Salahuddin' : 'Mahallah Zubair',
        ];

        return view('booking.packagebooking', compact('data'));
    }

    public function submitBooking(Request $request)
    {
        $validated = $request->validate([
            'package' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|string',
            'court' => 'required|string',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'package' => $validated['package'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'court' => $validated['court'],
        ]);

        return redirect()->route('package.booking', ['package' => $request->package])
            ->with('success', 'Booking submitted! Proceed to payment.');
    }

    public function showSingleBooking()
    {
        $sports = ['Futsal', 'Badminton', 'Basketball', 'Volleyball'];
        return view('booking.singlebooking', compact('sports'));
    }

    public function submitSingleBooking(Request $request)
    {
        $validated = $request->validate([
            'sport' => 'required|string',
            'date' => 'required|date',
            'start_time' => 'required|string',
            'duration' => 'required|string',
            'court' => 'required|string',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'sport' => $validated['sport'],
            'start_date' => $validated['date'],
            'start_time' => $validated['start_time'],
            'duration' => $validated['duration'],
            'court' => $validated['court'],
        ]);

        return redirect()->route('single.booking')->with('success', 'Booking submitted successfully!');
    }
}
