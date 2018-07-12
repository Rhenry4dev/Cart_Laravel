<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'user_id' =>'required|numeric',
            'status'=>'required',
            'product_id'=>'required',
        ];
    }
    public function messages()
    {
        return [
        'user_id.required'=>'Você precisa estar logado!',
        'product_id.required'=>'Este produto não existe ou está indisponível!',
        ];
    }
}
