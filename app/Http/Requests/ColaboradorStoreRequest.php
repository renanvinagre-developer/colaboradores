<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColaboradorStoreRequest extends FormRequest
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
            'nome_completo' => 'required|max:255',
            'cpf' => 'required|unique:colaboradores|max:11',
            'email' => 'required|unique:colaboradores|email|max:255',
            'rg' => 'required|max:255',
            'data_nascimento' => 'required|date',
            'cep' => 'required|max:255',
            'endereco' => 'required|max:255',
            'numero' => 'required|max:255',
            'cidade' => 'required|max:255',
            'estado' => 'required|max:255'
        ];
    }
}
