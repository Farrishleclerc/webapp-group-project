<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

class AdminCrudController extends Controller
{
    // Users
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only(['name', 'email', 'password']));
        return redirect()->route('admin.users.index')->with('success', 'User updated.');
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
}
