<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'sku' => 'required|unique:products,sku,' . $this->id . ',id,deleted_at,NULL',
            'qte' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:1',
        ];
    }
    public function messages()
    {
        return [
            'sku.required'=>'Le champ Unité de gestion des stocks est obligatoire',
            'sku.unique'=>'Le champ Unité de gestion des stocks a déjà été pris.',
            'qte.required'=>'Le champ Quantité est obligatoire',
            'price.required'=>'Le champ prix est obligatoire',
            'price.numeric'=>'Le champ prix doit etre un chiffre',
            'price.min'=>'Le prix minimum est 1',
        ];
    }
}


