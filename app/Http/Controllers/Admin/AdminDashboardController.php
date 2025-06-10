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
}
