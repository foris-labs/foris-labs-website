<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

/** @mixin Collection<User> */
class Leaderboard extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $user = $this->collection
            ->where('username', $request->user('api')->username)
            ->first();

        return $user->toArray();

//        return [
//            'entries' => $this->collection
//                ->take($request->input('count', 10))
//                ->map(function (User $user) {
//                    $user->loadMissing('currentAvatar');
//
//                    return [
//                        'username' => $user->username,
//                        'avatar_slug' => $user->currentAvatar?->slug,
//                        'score' => $user->score,
//                        'rank' => $user->rank,
//                    ];
//                }),
//
//            'user_entry' => function () use ($request) {
//                $user = $this->collection
//                    ->where('username', $request->user('api')->username)
//                    ->first();
//
//                $user->loadMissing('currentAvatar');
//
//                return [
//                    'username' => $user->username,
//                    'avatar_slug' => $user->currentAvatar?->slug,
//                    'score' => $user->score,
//                    'rank' => $user->rank,
//                ];
//            },
//        ];
    }
}
