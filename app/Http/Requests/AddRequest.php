<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'required|url',
            'code' => 'required',
            'price' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => __('messages.validate_product_name'),
            'image.required' => __('messages.validate_product_image'),
            'code.required' => __('messages.validate_product_code'),
            'price.required' => __('messages.validate_product_price'),
        ];
    }
}
