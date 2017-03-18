<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Agenda extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'proposta_id',
        'budget_id',
        'titulo',
        'atividade',
        'data',
        'duracao',
        'atribuido',
        'vinculo_prop'
    ];

}
