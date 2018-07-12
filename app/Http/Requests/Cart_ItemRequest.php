<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cart_ItemRequest extends FormRequest
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

            'cart_id' =>'required|numeric',
            'product_id'=>'required',
            'quantity'=>'required',

        ];
    }
    public function messages()
    {
        return [
        'product_id.required'=>'Este produto não existe!',
        'quantity.required'=>'Quantidade indisponível!',
        ];
    }
}
