<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductQuantityRequest extends FormRequest
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
            'quantity' => 'required|min:1|numeric',
        ];
    }

    public function messages()
    {
        return [
            'quantity.required' => 'Le champ Quantité est obligatoire',
            'quantity.min' => 'La quantité minimum est 1'
        ];
    }
}
