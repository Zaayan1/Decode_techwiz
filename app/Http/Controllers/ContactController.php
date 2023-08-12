<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
{
    return view('contact');
}

public function submitForm(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Save form data or perform desired actions

    // Send email to admin
    Mail::to('admin@example.com')->send(new ContactFormMail($request->all()));

    return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully.');
}
}
