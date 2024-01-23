<?php

namespace Bsk\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bsk\Contact\Models\Contact;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact::contactForm');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        Session::put('contact-flash-message',  'Contact Form Data Has Been inserted');
        return redirect('/contact');
    }
}
