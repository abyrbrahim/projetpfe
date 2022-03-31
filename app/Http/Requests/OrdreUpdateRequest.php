<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdreUpdateRequest extends FormRequest
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
            'prix'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'description.required'=>'Le champ descriptif est obligatoire',
            'prix.required'=>'Le champ prix est obligatoire',
        ];
    }
}
