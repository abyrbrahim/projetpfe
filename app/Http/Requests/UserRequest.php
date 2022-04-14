<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'=>'required|email|unique:users,email',
            'is_admin'=>'required',
            'password'=>'required|min:6|confirmed'
        ];
    }
    public function messages()
    {

            return [
                'name.required'=>'Compléter le champ correspondant au nom',
                'email.required'=>'Le champ email est obligatoire',
                'email.unique'=>'Email a déjà pris',
                'password.confirmed'=>'La confirmation du mot de passe ne correspond pas',
                'password.required'=>'Le champ password est obligatoire'
            ];

    }
}
