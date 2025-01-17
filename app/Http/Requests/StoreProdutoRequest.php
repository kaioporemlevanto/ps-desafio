<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nome' => ['required', 'unique:produtos', 'min:3', 'max:100'],
            'descricao' => ['required', 'min:5'],
            'preco' => ['required'],
            'quantidade' => ['required', 'min:1'], //atenção com o minimo
            'imagem' => 'mimes:jpg,png,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'O campo ":attribute" é obrigatorio',
            'nome.unique' => 'Nome já existente!',
            'nome.max' => "Campo 'nome' com um máximo de 100 caracteres!",
            'nome.min' => "Campo 'nome' com um mínimo de 3 caracteres!",
            'descricao.min' => "Campo 'descrição' com um mínimo de 5 caracteres!",
            'quantidade.min' => "Campo 'quantidade' com um mínimo de 1 caracter!",
        ];
    }
}
