<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => ['required', 'string', 'max:150'],
            'organisation' => ['nullable', 'string', 'max:200'],
            'email'        => ['required', 'email', 'max:200'],
            'phone'        => ['nullable', 'string', 'max:30'],
            'subject'      => ['required', 'string', 'max:200'],
            'message'      => ['required', 'string', 'max:3000'],
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Thank you! Your message has been received. We will be in touch soon.');
    }
}
