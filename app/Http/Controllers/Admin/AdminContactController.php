<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'name' => 'required',
            'matric' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact->update($validated);
        return redirect()->route('admin.contacts.index')->with('success', 'Contact updated.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted.');
    }
}
