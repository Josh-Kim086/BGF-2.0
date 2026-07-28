<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'subject' => 'required|string|max:255',
                'message' => 'required'
            ],
            [
                'name.required' => 'Please enter your name.',
                'email.required' => 'Please enter your email.',
                'email.email' => 'Please enter a valid email address.',
                'subject.required' => 'Please enter a subject.',
                'message.required' => 'Please enter your message.',
            ]
        );

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'type' => 'contact',
            'status' => 'new'
        ]);

        return redirect('/contact#contact-form')
            ->with('contact_success', 'Your message has been sent successfully!');
    }
}