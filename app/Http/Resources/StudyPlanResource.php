<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\StudyPlan */
class StudyPlanResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'subject' => $this->subject->slug,
            'exam' => $this->exam,
            'questions_per_day' => $this->questions_per_day,
            'started_at' => $this->started_at,
            'ended_at' => $this->ended_at,
        ];
    }
}
