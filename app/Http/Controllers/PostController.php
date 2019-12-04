<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View|Factory
     */
    public function index()
    {
        /** @var Post $posts */
        $posts = Post::simplePaginate(15);

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View|Factory
     */
    public function create()
    {
        /** @var Category $categories */
        $categories = Category::all();

        return view('posts.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return Redirector|RedirectResponse
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());

        return redirect()->back()->with(
            'status',
            "Post #{$post->id}"
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View|Factory
     */
    public function show($id)
    {
        /** @var Post $post */
        $post = Post::find($id);

        return view('posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View|Factory
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param int $id
     * @return Redirector|RedirectResponse
     */
    public function update(PostRequest $request, $id)
    {
        /** @var Post $post */
        $post = Post::find($id)->update($request->all());

        return redirect()->back()->with([
            'status',
            "Post #{$post->id} updated!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Redirector|RedirectResponse
     * @throws Exception
     */
    public function destroy($id)
    {
        /** @var Post $post */
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with([
            'status',
            "Post #{$post->id} deleted!"
        ]);
    }
}
