<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class filmeRequest extends FormRequest
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
            'titulo'=> 'required',
            'classificacao'=> 'required|numeric|max:10',
            'premios'=> 'required|numeric|',
            'duracao'=> 'required|numeric|',
            'dia'=> 'required',
            'mes'=> 'required',
            'ano'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O campo titulo é obrigatório.',
            'titulo.unique' => 'Essa parada aí já existe',
            'classificacao.required' => 'Tem que por, carai',
            'classificacao.numeric' => 'Tem que por UM NUMERO, carai',
            'classificacao.max' => 'Tem que por UM NUMERO ATÉ 10, ESPERTONA',
            'premios.required' => 'Tem que por, carai!',
            'duracao.required' => 'Tem que por, carai!',
            'dia.required' => 'Tem que por DIA, carai!',
            'mes.required' => 'Tem que por mes, carai!',
            'ano.required' => 'Tem que por ano, carai!',

        ];
    }
}
