<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function send(Request $request)
{
    // Validate request data
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name'  => 'required|string|max:255',
        'email'      => 'required|email',
        'mobile'     => 'required|digits_between:7,15',
        'messages'   => 'required|string|max:1000',
    ]);

    // Get only the required fields
    $data = $request->only('first_name', 'last_name', 'email', 'mobile', 'messages');

    // Send email
    Mail::send('emails.contact', $data, function ($message) use ($data) {
        $message->to('support@evonixtech.com')
                ->subject('New Inquiry from ' . $data['first_name'] . ' ' . $data['last_name']);
    });

    // Redirect to thank you page with success flag
    return redirect()->route('thank-you')->with(['success' => true]);
}
}

