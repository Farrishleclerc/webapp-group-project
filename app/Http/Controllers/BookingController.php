<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBooking($package)
    {
        // Data depending on package
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

    // Save booking or proceed to payment
    // For example: Booking::create($validated);

    return redirect()->route('package.booking', ['package' => $request->package])
        ->with('success', 'Booking submitted! Proceed to payment.');
}

}

