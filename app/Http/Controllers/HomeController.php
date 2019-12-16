<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\User;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('home');
    }

    public function contact(ContactRequest $request)
    {
//        Mail::to($request->input('email'))->send(new Application());
//        Mail::to([
//             TODO: Swap out email to Cole's email
//            'pascal.allen88@gmail.com',
//        ])->send(new NewContact($request->all()));

        return redirect()->back()->with(
            'status',
            "Thank you for contacting us, {$request->input('firstName')}. We'll be with you shortly. We've sent you an email with more details."
        );
    }

    public function about()
    {
        /** @var User $users */
        $users = User::with('posts')->get();

        return view('about', [
            'users' => $users,
        ]);
    }
}
