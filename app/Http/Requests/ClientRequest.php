<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email|unique:clients,email',
            'phone' => 'required|numeric|min:8|unique:clients,phone',

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Compléter le champ correspondant au nom',
            'email.required'=>'Le champ email est obligatoire',
            'phone.required'=>'Le téléphone doit comporter au moins 8 caractères',
            'email.unique'=>'Email a déjà pris',
            'phone.unique'=>'Le numéro de téléphone a déjà été pris'
        ];
    }
}
