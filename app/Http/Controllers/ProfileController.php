<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View|Factory
     */
    public function index()
    {
        return view('profile', [
            'user' => auth()->user(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProfileUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        /** @var User $user */
        $user = User::find(auth()->id());
        $user->update($request->all());

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->storeAs(
                'public/avatars', str_slug($user->name) . '.' . $request->file('avatar')->getClientOriginalExtension()
            );

            $user->avatar = str_slug($user->name) . '.' . $request->file('avatar')->getClientOriginalExtension();
            $user->save();
        }

        return redirect()->back();
    }
}
