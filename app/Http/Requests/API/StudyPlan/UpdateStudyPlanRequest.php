<?php

namespace App\Http\Requests\API\StudyPlan;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudyPlanRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'subject' => ['sometimes', 'string', 'exists:subjects,slug'],
            'exam' => ['nullable'],
            'duration' => ['sometimes', 'integer'],
            'questions_per_day' => ['sometimes', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
