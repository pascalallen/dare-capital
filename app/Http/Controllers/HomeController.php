<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Post;
use App\User;
use GuzzleHttp\Client;
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
        $client = new Client([
            'base_uri' => 'https://google.com/recaptcha/api/',
            'timeout' => 2.0
        ]);

        $response = $client->request('POST', 'siteverify', [
            'query' => [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $request->input('recaptchaToken'),
            ]
        ]);

        $responseBody = json_decode($response->getBody(), true);

        if (!$responseBody['success']) {
            return redirect()->back()->with(
                'status',
                'Whoops! Unable to verify your Recaptcha token, please try again.'
            );
        }
//        Mail::to($request->input('email'))->send(new Application());
//        Mail::to([
        // TODO: Swap out email to Cole's email
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
        $users = User::with('posts')
            ->whereIn('email', ['cole@darebizcapital.com', 'debra@darebizcapital.com'])
            ->get();

        return view('about', [
            'users' => $users,
        ]);
    }

    public function blog()
    {
        /** @var Post $posts */
        $posts = Post::with(['user', 'category'])
            ->get()
            ->groupBy('category.slug');

        return view('blog', [
            'posts' => $posts,
        ]);
    }
}
