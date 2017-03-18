<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cliente extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'cpf',
        'empresa',
        'telefone',
        'email',
        'responsavel',
        'endereco',
        'atribuido'
    ];

}
