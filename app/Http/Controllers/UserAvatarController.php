<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAvatarRequest;
use App\User;

class UserAvatarController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param UserAvatarRequest $request
     * @param int $userId
     */
    public function update(UserAvatarRequest $request, int $userId): void
    {
        /** @var User $user */
        $user = User::find($userId);

        $request->file('avatar')->storeAs(
            'public/avatars', str_slug($user->name) . '.' . $request->file('avatar')->getClientOriginalExtension()
        );

        $user->update([
            'avatar' => str_slug($user->name) . '.' . $request->file('avatar')->getClientOriginalExtension(),
        ]);
    }
}
