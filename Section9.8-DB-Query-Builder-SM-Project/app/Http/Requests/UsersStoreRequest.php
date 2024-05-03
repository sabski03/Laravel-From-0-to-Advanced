<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UsersStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => ['required','confirmed', Password::default()],
            'password_confirmation' => 'required',
            'created_at' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'created_at.required' => "The Date Can Not Be Blank",
        ];
    }
}
