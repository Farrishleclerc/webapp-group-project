<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $bookings = Booking::where('user_id', $user->id)->latest()->get();

        return view('profile', compact('user', 'bookings'));
    }
}

