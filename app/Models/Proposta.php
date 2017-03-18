<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Proposta extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'proposta_id',
        'usuario_id',
        'processo_id',
        'cliente_id',
        'fornecedor_id',
        'observacao',
        'resp_tec',
        'resp_com',
        'status',
        'respa',
        'respb',
        'respc',
        'respd',
        'respe',
        'respf',
    ];

}
