<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'description' => 'required|string',
            'experiencie' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'profile_types_id' => 'required|exists:profile_types,id',
            'cities_id' => 'required|exists:cities,id',
        ];
    }
}
