<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

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

    public function dashboard()
{
    $userCount = \App\Models\User::count();
    $contactCount = \App\Models\Contact::count();

    // For example: assume target capacity = 100 users, target engagement = 50 messages
    $userPercentage = $userCount ? min(100, round(($userCount / 100) * 100)) : 0;
    $contactPercentage = $contactCount ? min(100, round(($contactCount / 50) * 100)) : 0;

    return view('admin.dashboard', compact('userCount', 'contactCount', 'userPercentage', 'contactPercentage'));
}
}
