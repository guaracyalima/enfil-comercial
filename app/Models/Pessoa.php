<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pessoa extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'tipo_contato',
        'email',
        'cliente_id',
        'telefone',
        'atribuido'
    ];

}
