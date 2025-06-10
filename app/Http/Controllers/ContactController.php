<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'matric' => 'required|max:50',
            'email' => 'required|email|max:100',
            'message' => 'required'
        ]);

        Contact::create($validated);

        return redirect()->route('contact')
                         ->with('status', 'success');
    }
}
