<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Booking;

class PaymentController extends Controller
{
    public function show()
    {
        $booking = session('bookingData');
        return view('payment', compact('booking'));
    }

    public function process(Request $request)
{
    $bookingData = session('bookingData');

    $booking = Booking::where('user_id', Auth::id())
        ->latest()
        ->first(); // Or use a better identifier if needed

    $payment = Payment::create([
        'user_id' => Auth::id(),
        'booking_id' => $booking->id,
        'payment_status' => 'paid',
        'amount' => 5.00 // or calculate based on booking
    ]);

    return view('thankyou', ['booking' => $booking]);
}
}
