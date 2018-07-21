<?php

namespace App\Http\Requests\Api;

use Dingo\Api\Http\FormRequest;

class UserRequestAPI extends FormRequest
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
            'email'=>'email|required|max:100',
            'password'=>'required',
            'user_type'=>'nullable',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'O nome é obrigatório!',
            'email.required'=>'O email é obrigatório',
            'email.email'=>'O email é inválido.',
            'password.required'=>'Senha inválida',
        ];
    }
}
