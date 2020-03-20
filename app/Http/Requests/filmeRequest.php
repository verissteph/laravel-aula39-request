<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmeRequest extends FormRequest
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
            'title' => 'required',
            'rating' => 'required|numeric|max:10',
            'length' => 'required|numeric',
            'awards' => 'required|numeric',
            'genre_id' => 'required',
            'dia' => 'required',
            'mes' => 'required',
            'ano' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo titulo é obrigatório.',
            'title.unique' => 'Essa parada aí já existe',
            'rating.required' => 'Tem que por, carai',
            'rating.numeric' => 'Tem que por UM NUMERO, carai',
            'rating.max' => 'Tem que por UM NUMERO ATÉ 10, ESPERTONA',
            'length.required' => 'Tem que por, carai!',
            'length.required' => 'Tem que por, carai!',
            'dia.required' => 'Tem que por DIA, carai!',
            'mes.required' => 'Tem que por mes, carai!',
            'ano.required' => 'Tem que por ano, carai!',
        ];
    }
}
