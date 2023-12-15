<?php

namespace App\Http\Requests\API;

use App\Enum\Currency;
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'currencies' => ['required', 'array'],
            'currencies.*.currency' => ['required', 'string'],
            'currencies.*.amount' => 'required|numeric|min:0',
            'relative' => ['nullable', 'boolean'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $currencies = $this->input('currencies');
        if(is_string($currencies)) {
            $decodedCurrencies = json_decode($currencies, true);

            if ($decodedCurrencies !== null) {
                $this->merge(['currencies' => $decodedCurrencies]);
            }
        }
    }
}
