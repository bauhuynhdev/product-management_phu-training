<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|min:6|max:30|alpha',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6|max:16',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => __('messages.validate_name'),
            'email.required' => __('messages.validate_email'),
            'password.required' => __('messages.validate_password'),
        ];
    }
}
