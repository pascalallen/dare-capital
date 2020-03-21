<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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

    public function blog(Request $request)
    {
        /** @var Post $posts */
        $posts = Post::with(['user', 'category'])
            ->when($request->input('category'), static function (Builder $query, string $categorySlug) {
                $query->whereHas('category', static function (Builder $query) use ($categorySlug) {
                    $query->where('slug', $categorySlug);
                });
            })
            ->orderByDesc('created_at')
            ->simplePaginate(15);

        return view('blog', [
            'posts' => $posts,
        ]);
    }

    public function apply()
    {
        return view('application', [
            'cognitoFormId' => 1,
            'pageTitle' => 'Apply Now'
        ]);
    }

    public function getFinancing()
    {
        return view('application', [
            'cognitoFormId' => 2,
            'pageTitle' => 'Get Financing Now'
        ]);
    }

    public function brokerReferral()
    {
        return view('application', [
            'cognitoFormId' => 3,
            'pageTitle' => 'Broker Referral'
        ]);
    }
}
