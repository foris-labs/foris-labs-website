<?php

namespace App\Http\Requests\API\StudyPlan;

use Illuminate\Foundation\Http\FormRequest;

class GenerateRecommendationsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'score' => ['required', 'integer'],
            'daily_minutes' => ['required', 'integer']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
