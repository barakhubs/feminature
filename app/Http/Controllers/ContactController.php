<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send (Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:30',
            'phone_number' => 'required|numeric'
        ]);

        $emailData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'phone_number' => $request->input('phone_number')
        ];

        // Send email
        Mail::to('markbrightbaraka@gmail.com')->send(new ContactUsMail($emailData));

        // Return response
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
