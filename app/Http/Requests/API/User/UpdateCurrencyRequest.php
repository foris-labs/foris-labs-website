<?php

namespace App\Http\Requests\API\User;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCurrencyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'currencies' => ['required', 'array'],
            'currencies.*.currency' => ['required', 'string'],
            'currencies.*.amount' => ['required', 'numeric', Rule::when(!$this->boolean('relative'), fn () => 'min:0')],
            'relative' => ['nullable', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'currencies.*.amount.min' => 'Amount must not be negative.',
        ];
    }

    protected function prepareForValidation(): void
    {
        $currencies = $this->input('currencies');
        if (is_string($currencies)) {
            $decodedCurrencies = json_decode($currencies, true);

            if ($decodedCurrencies !== null) {
                $this->merge(['currencies' => $decodedCurrencies]);
            }
        }

        $relative = $this->input('relative');
        if (is_string($relative)) {
            $this->merge(['relative' => filter_var($relative, FILTER_VALIDATE_BOOLEAN)]);
        }
    }
}
