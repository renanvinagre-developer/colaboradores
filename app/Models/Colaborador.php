<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';

    protected $fillable = [
        'nome_completo',
        'cpf',
        'email',
        'rg',
        'data_nascimento',
        'cep',
        'endereco',
        'numero',
        'cidade',
        'estado'
    ];
    
    /**
     * Get the salaries for the employee.
     */
    public function salarios()
    {
        return $this->hasMany(Salario::class, 'colaborador_id');
    }
}
