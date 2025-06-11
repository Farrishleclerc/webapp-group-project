<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function show()
    {
        $booking = session('bookingData');
        return view('payment', compact('booking'));
    }

    public function process(Request $request)
{
    // Here you'd normally process the payment (e.g., Stripe or mock payment)

    // Clear session
    session()->forget('bookingData');

    return redirect()->route('home')->with('success', 'Payment successful!');
}
}
