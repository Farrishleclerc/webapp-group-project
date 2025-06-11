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
}
