<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
           "name"=>'required',
           "email"=>'required|email|unique:users,email,'.$this->id,
           'is_admin'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Compléter le champ correspondant au nom',
            'email.required'=>'Le champ email est obligatoire',
            'email.unique'=>'Email a déjà pris',
            'is_admin'=>'Role est obligatoire',
        ];
    }
}
