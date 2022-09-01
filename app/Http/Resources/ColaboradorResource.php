<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ColaboradorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome_completo' => $this->nome_completo,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'rg' => $this->rg,
            'data_nascimento' => $this->data_nascimento,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'cidade' => $this->cidade,
            'estado' => $this->estado
        ];
    }
}
