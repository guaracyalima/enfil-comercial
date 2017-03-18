<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Budget extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'proposta_id',
        'empresa',
        'processo',
        'cliente_id',
        'segmento',
        'assunto',
        'respt',
        'respc',
        'respcoord',
        'prop_tec',
        'prop_com',
        'estima_valor',
        'valor',
        'chance',
        'data_compa',
        'interacao',
        'status',
        'observacao',
        'via_prop',
        'existe_prop'
    ];

}
