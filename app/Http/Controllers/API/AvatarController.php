<?php

declare(strict_types=1);


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Enums\ErrorType;
use App\Http\Resources\AvatarResource;
use App\Http\Resources\ErrorResponse;
use App\Models\Avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function index(Request $request)
    {
        $free = $request->boolean('free');

        $avatars = Avatar::query();

        if ($free) {
            $avatars = $avatars->where('price', DB::raw("json_array()"));
        }

        return AvatarResource::collection($avatars->get());
    }

    public function show(Request $request)
    {
        $avatarName = $request->input('name');

        $avatar = Avatar::where('slug', $avatarName)->first();

        if (!$avatar) {
            return ErrorResponse::notFound('Avatar not found');
        }


        return response(\Storage::disk('public')
            ->get("avatars/$avatar->image_url"));
    }


}
