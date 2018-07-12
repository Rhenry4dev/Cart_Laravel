<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'user_id' => 'required|numeric',
            'street_name' => 'required',
            'number' => 'required|numeric',
            'public_place' => 'required',
            'town' => 'required',
            'state' => 'required',
            'country' => 'required',
            'CEP' => 'required'
        ];
    }
    public function messages()
    {
        return [
        'user_id.required'=>'Você tem de estar logado!' ,
        'street_name.required' =>'Este campo é necessário' ,
        'number.required' => 'Este campo é necessário' ,
        'public_place.required' =>'Este campo é necessário' ,
        'town.required' =>'Este campo é necessário' ,
        'state.required' =>'Este campo é necessário' ,
        'country.required' =>'Este campo é necessário',
        'CEP.required' =>'Este campo é necessário' ,

        ];
    }
}
