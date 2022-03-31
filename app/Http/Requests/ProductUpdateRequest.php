<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'sku'=>'required',
            'qte' => 'required|numeric|min:1',
        ];
    }
    public function messages()
    {
        return [
            'sku.required'=>'The Unité de gestion des stocks field is required',
            'qte.required'=>'Le champ Quantité est obligatoire',
        ];
    }

}
