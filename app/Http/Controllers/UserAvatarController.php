<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAvatarController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param Request $request
     */
    public function update(Request $request): void
    {
        $path = $request->file('avatar')->storeAs(
            'avatars', $request->user()->id
        );

        auth()->user()->avatar = $path;
    }
}
