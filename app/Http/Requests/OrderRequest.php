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
            'client_id'=>'required',
            'price'=>'required|numeric|min:1',
            'description'=>'required',
            'orderProducts'=>'required'

        ];
    }
    public function messages()
    {
        return [
            'client_id.required'=>"Le champ client est obligatoire",
            'description.required'=>'Le champ descriptif est obligatoire',
            'price.required'=>'Le champ prix est obligatoire',
            'price.min'=>'Le prix doit être au moins 1',
            'orderProducts.required'=>'Les produit sont requis'
        ];
    }
}
