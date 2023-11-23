<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        return new UserResource(auth('api')->user());
    }

    public function update(Request $request)
    {
        $user = auth('api')->user();

        $user->update($request->only('name', 'username', 'email'));

        return new UserResource($user);
    }
}
