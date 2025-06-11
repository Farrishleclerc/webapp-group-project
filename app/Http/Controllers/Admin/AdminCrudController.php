<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Booking;

class AdminCrudController extends Controller
{
    // Users
    public function indexadmin()
    {
        $users = User::all();
        return view('admin.users.indexadmin', compact('users'));
    }

    public function editadmin($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.editadmin', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only(['name', 'email', 'password']));
        return redirect()->route('admin.users.indexadmin')->with('success', 'User updated.');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('success', 'User deleted.');
    }

    // Contacts
    public function contactMessages()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroyContact($id)
    {
        Contact::destroy($id);
        return back()->with('success', 'Message deleted.');
    }

    // Dashboard
    public function dashboard()
    {
        $userCount = User::count();
        $contactCount = Contact::count();
        $bookingCount = Booking::count();

        $userPercentage = $userCount ? min(100, round(($userCount / 100) * 100)) : 0;
        $contactPercentage = $contactCount ? min(100, round(($contactCount / 50) * 100)) : 0;
        $bookingPercentage = $bookingCount ? min(100, round(($bookingCount / 50) * 100)) : 0;

        return view('admin.dashboard', compact(
            'userCount',
            'contactCount',
            'bookingCount',
            'userPercentage',
            'contactPercentage',
            'bookingPercentage'
        ));
    }

    // Bookings
    public function bookingIndex()
    {
        $bookings = Booking::all();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function editBooking($id)
    {
        $booking = Booking::findOrFail($id);
        return view('admin.bookings.edit', compact('booking'));
    }

    public function updateBooking(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'package' => 'required|string|max:255',
            // Add more fields if needed
        ]);

        $booking->update($validated);
        return redirect()->route('admin.bookings.index')->with('success', 'Booking updated.');
    }

    public function destroyBooking($id)
    {
        Booking::destroy($id);
        return back()->with('success', 'Booking deleted.');
    }
}
