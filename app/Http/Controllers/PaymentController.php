<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show()
    {
        $booking = session('bookingData');
        return view('.payment', compact('booking')); // 👈 updated path
    }

public function process(Request $request)
{
    // Handle actual payment logic here (e.g., Stripe, mock payment)
    session()->forget('bookingData');
    return redirect()->route('home')->with('success', 'Payment successful!');
}
}
