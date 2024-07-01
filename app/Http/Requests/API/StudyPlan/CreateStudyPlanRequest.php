<?php

namespace App\Http\Requests\API\StudyPlan;

use App\Enums\ExamBody;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateStudyPlanRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'subject' => ['required', 'string', 'exists:subjects,slug'],
            'exam' => ['required', 'string', Rule::enum(ExamBody::class)],
            'questions_per_day' => ['required', 'integer', 'min:1', 'max:100'],
            'duration' => ['required', 'integer', 'min:1', 'max:365'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'subject' => strtoupper($this->input('subject')),
            'exam' => strtoupper($this->input('exam')),
        ]);
    }
}
