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
            'body' => $this->body,
            'options' => OptionResource::collection($this->whenLoaded('options')),
            'source_exam' => $this->source_exam->value,
            'source_year' => $this->source_year,
            'difficulty_level' => $this->difficulty_level
        ];
    }
}
