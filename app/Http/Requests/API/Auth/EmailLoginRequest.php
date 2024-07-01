<?php

namespace App\Http\Requests\API\Auth;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EmailLoginRequest extends FormRequest
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
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'client_id' => 'required',
            'client_secret' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',

        ];
    }

}
