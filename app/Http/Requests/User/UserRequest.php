<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $request = request();

        $isCreating = $request->isMethod('POST');
        $uniqueRule = $isCreating ? '|unique:users' : '';

        return [
            'name' => 'required',
            'email' => 'required|email'.$uniqueRule,
            'password' => 'sometimes',
        ];
    }
}
