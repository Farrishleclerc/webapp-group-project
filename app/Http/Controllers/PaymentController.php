<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Add this method
    public function showPaymentForm()
    {
        return view('payment'); // Use the correct Blade file name here
    }

    public function process(Request $request)
    {
        // Example logic for payment
        // You can add validation, store info, etc.
        return redirect()->route('payment.success'); // or any success page
    }
}
