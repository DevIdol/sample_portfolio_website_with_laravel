<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(){
        $contact_form_data =  request()->all();
        Mail::to('devidol.mm@gamil.com')->send(new ContactFormMail($contact_form_data));

        return redirect()->route('index', '/#contact')->with('success', 'Your message has been submitted successfully');
    }
}
