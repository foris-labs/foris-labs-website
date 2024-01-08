<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ErrorResponse;
use Illuminate\Http\Request;

class UserAvatarController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $user->loadMissing('avatars');

        return auth()->user()->avatars->map(fn ($avatar) => $avatar->slug);
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $name = $request->input('name');

        $avatar = $user->avatars()->where('slug', $name)->first();

        if (!$avatar) {
            return ErrorResponse::notFound('Avatar not found');
        }

        $user->setCurrentAvatar($avatar);

        return response()->noContent();
    }


}
