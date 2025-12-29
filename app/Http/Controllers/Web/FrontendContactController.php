<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class FrontendContactController
{

    public function show()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:20', // Added for volunteer form
        ]);

        // Logic to send email would go here.
        // Mail::to('contact@newday.org')->send(new ContactFormMail($validated));

        return back()->with('success', __('Votre message a été envoyé avec succès ! Nous vous répondrons bientôt.'));
    }

}
