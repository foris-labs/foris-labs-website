<?php

namespace App\Http\Requests\API\StudyPlan;

use App\Enums\ExamBody;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Str;

class GetOnboardingQuestionsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'exam' => ['required', 'string', Rule::enum(ExamBody::class)],
            'subject' => ['required', 'exists:subjects,slug']
        ];
    }

    public function messages(): array
    {
        return [
            'subject.exists' => 'The subject does not exist.',
            'exam.enum' => 'The exam provided is invalid.'
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'exam' => strtoupper($this->input('exam')),
            'subject' => Str::slug($this->input('subject'))
        ]);
    }

    public function authorize(): bool
    {
        return true;
    }
}
