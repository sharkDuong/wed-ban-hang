<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|unique:products|max:50',
            'code' => 'required|unique:products',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Something wrong sir!',
            'code.required' => 'Something wrong sir!',
            'price.required' => 'Something wrong sir!',
            'quantity.required' => 'Something wrong sir!',
        ];
    }
}