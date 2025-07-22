<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
     public function showForm()
    {
        return view('flash-session');
    }

    public function handleForm(Request $request)
    {
        // Do something with the form data if needed...

        // Set flash message
        return redirect()->back()->with('message', '✅ Form submitted successfully!');
    }
    //
}
