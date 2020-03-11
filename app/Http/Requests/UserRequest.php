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
            //'email'=>'required|email'
            'email' => 'required|email|unique:users,email',
            'password'=>'required|min:6|confirmed'
        ];
    }
    public function messages(){
        return[
            'name.required'=>'O campo nome é obrigatorio',
            'email.required'=>'O campo email é obrigatorio',
            'email.unique'=>'O email já existe',
            'email.email'=>'Deve ser um formato de email valido',
            'password.required'=>'O campo senha é obrigatorio',
            'password.min'=>'A senha deve ter no min 6 caracteres',
            'password.confirmed'=>'As senhas precisam ser iguais',

        ];
    }
}
