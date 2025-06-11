<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.indexadmin', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.editadmin', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user->update($validated);
        return redirect()->route('admin.users.indexadmin')->with('success', 'User updated.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.indexadmin')->with('success', 'User deleted.');
    }
}
