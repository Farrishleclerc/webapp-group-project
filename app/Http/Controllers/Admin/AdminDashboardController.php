<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::latest()->take(5)->get();
        $contacts = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact('users', 'contacts'));
    }

    public function dashboard()
{
    $userCount = User::count();
    $contactCount = Contact::count();
    $bookingCount = Booking::count();

    $expectedUsers = 100; // or get from config/settings
    $userPercentage = round(($userCount / $expectedUsers) * 100, 1);
    $bookingPercentage = round(($bookingCount / max($userCount, 1)) * 100, 1); // prevent divide-by-zero

    return view('admin.dashboard', compact('userCount', 'contactCount', 'userPercentage', 'contactPercentage', 'bookingPercentage'));
}
}
