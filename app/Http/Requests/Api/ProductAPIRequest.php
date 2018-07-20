<?php

namespace App\Http\Requests\Api;

use Dingo\Api\Http\FormRequest;

class ProductAPIRequest extends FormRequest
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

    public function wantsJson()
    {
       return true;
    }

    public function response(array $errors) 
    {
        return Response::create($errors, 403);
    }

    public function rules()
    {
        return [
            'name'=>'required|min:3',
            'category_id'=>'required|numeric',
            'price'=>'required|numeric',
            'description'=>'required|max:255',
            'quantity'=>'required|numeric',
            'image'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'O nome é obrigatório!',
            'price.required'=>'O preço é obrigatório',
            'price.nuemric'=>'O preço tem de ser um número!',
            'category_id.required'=>'A categoria é requerida!',
            'description.required'=>'A descrição é obrigatório',
            'quantity.required'=>'A quantidade é obrigatório',
            'quantity.numeric'=>'A quantidade tem de ser um número!',
            'image.required'=>'Você não colocou a imagem do produto',
        ];
    }
}