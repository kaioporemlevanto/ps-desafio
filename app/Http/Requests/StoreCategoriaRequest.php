<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'categoria' => ['required', 'unique:categorias', 'min:3', 'max:100']
        ];
    }

    public function messages()
    {
        return [
            'categoria.unique' => "Categoria já existente",
            'categoria.required' => "Campo Obrigatório!",
            'categoria.max' => "Campo com um máximo de 100 caracteres!",
            'categoria.min' => "Campo com um mínimo de 3 caracteres!",
        ];
    }
}
