<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // ✅ CORRECT LOCATION (outside class)

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only([
            'submitBooking',
            'submitSingleBooking'
        ]);
    }

    public function showBooking($package)
    {
        // example return
        return view('booking.packagebooking', ['data' => ['package' => $package, 'court' => 'Court A']]);
    }

    public function showSingleBooking()
{
    $sports = ['Futsal', 'Badminton', 'Basketball', 'Volleyball'];
    return view('booking.singlebooking', compact('sports'));
}

public function submitBooking(Request $request)
{
    $validated = $request->validate([
        'package' => 'required|string',
        'start_date' => 'required|date',
        'end_date' => 'required|string',
        'court' => 'required|string',
    ]);

    $booking = Booking::create([
        'user_id' => Auth::id(),
        'package' => $validated['package'],
        'start_date' => $validated['start_date'],
        'end_date' => $validated['end_date'],
        'court' => $validated['court'],
    ]);

    // Store only the necessary data in the session as an array
    Session::put('bookingData', [
        'package'     => $booking->package,
        'start_date'  => $booking->start_date,
        'end_date'    => $booking->end_date,
        'court'       => $booking->court,
    ]);

    return redirect()->route('payment.show');
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

    // Fix: Use correct key names expected in the payment view
    session([
        'bookingData' => [
            'sport' => $validated['sport'],
            'date' => $validated['date'], // <- make sure this is the key you use in the view
            'start_time' => $validated['start_time'],
            'duration' => $validated['duration'],
            'court' => $validated['court'],
        ]
    ]);

    return redirect()->route('payment.show');
}
}
