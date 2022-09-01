<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColaboradorUpdateRequest extends FormRequest
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
            'nome_completo' => 'max:255',
            'cpf' => 'unique:colaboradores|max:11',
            'email' => 'unique:colaboradores|email|max:255',
            'rg' => 'max:255',
            'data_nascimento' => 'date',
            'cep' => 'max:255',
            'endereco' => 'max:255',
            'numero' => 'max:255',
            'cidade' => 'max:255',
            'estado' => 'max:255'
        ];
    }
}
