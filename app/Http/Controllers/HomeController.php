<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

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
}
