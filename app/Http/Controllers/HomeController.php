<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\NewLead;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contact(ContactRequest $request)
    {
        Mail::to($request->input('email'))->send(new NewLead($request->all()));

        return redirect()->back()->with(
            'status',
            "Thank you for contacting us, {$request->input('firstName')}. We'll be with you shortly. We've sent you an email with more details."
        );
    }
}