<?php

namespace App\Http\Resources;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Question */
class QuestionResource extends JsonResource
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
            'question' => $this->body,
            'options' => OptionResource::collection($this->whenLoaded('options')),
            'correct_option' => new OptionResource($this->options->where('is_correct', true))
        ];
    }
}
