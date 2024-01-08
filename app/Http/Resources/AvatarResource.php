<?php

namespace App\Http\Resources;

use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Avatar */
class AvatarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'image_url' => asset("storage/$this->image_url"),
            'price' => $this->price,
        ];
    }
}
