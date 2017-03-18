<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Fornecedor extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'cidade',
        'estado',
        'rua',
        'bairro',
        'numero',
        'cep',
        'telefone',
        'email',
        'site',
        'contato',
        'cnpj',
        'cpf'
    ];

}
