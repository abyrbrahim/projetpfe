<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'description'=>'required',
            'client_id'=>'required',
            'price'=>'required|numeric|min:1',
            'orderProducts'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'description.required'=>'Le champ descriptif est obligatoire',
            'price.required'=>'Le champ prix est obligatoire',
            'orderProducts.required'=>'Les produit sont requis'
        ];
    }
}
