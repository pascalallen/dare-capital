<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
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
        $post = auth()->user()
            ->posts()
            ->create($request->all());

        if ($request->hasFile('image')) {
            $request->file('image')->storeAs(
                'public/images', $post->slug . '.' . $request->file('image')->getClientOriginalExtension()
            );
            $post->image = $post->slug . '.' . $request->file('image')->getClientOriginalExtension();
            $post->save();
        }

        return redirect(route('posts.index'))->with(
            'status',
            "Post \"{$post->title}\" created."
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
        $post = Post::with('category')->find($id);
        $categories = Category::all();

        return view('posts.edit', [
            'post' => $post,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param int $id
     * @return Redirector|RedirectResponse
     */
    public function update(PostRequest $request, int $id)
    {
        /** @var Post $post */
        $post = Post::find($id);
        $post->update($request->all());

        if ($request->hasFile('image')) {
            $request->file('image')->storeAs(
                'public/images', $post->slug . '.' . $request->file('image')->getClientOriginalExtension()
            );
            $post->image = $post->slug . '.' . $request->file('image')->getClientOriginalExtension();
            $post->save();
        }

        return redirect(route('posts.index'))->with([
            'status',
            "Post \"{$request->input('title')}\" updated."
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

        if (Storage::exists($post->image)) {
            Storage::delete($post->image);
        }

        $post->delete();

        return redirect()->back()->with([
            'status',
            "Post #{$post->id} deleted!"
        ]);
    }
}
