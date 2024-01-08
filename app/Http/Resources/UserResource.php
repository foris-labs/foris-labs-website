<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin User */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $this->loadMissing('currentAvatar');

        return [
            'id' => $this->id,
            'fullname' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'gender' => $this->gender,
            'avatar_slug' => $this->currentAvatar->slug,
            'currencies' => $this->currencies,
        ];
    }
}
