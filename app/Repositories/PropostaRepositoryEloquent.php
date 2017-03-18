<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PropostaRepository;
use App\Models\Proposta;
use App\Validators\PropostaValidator;

/**
 * Class PropostaRepositoryEloquent
 * @package namespace App\Repositories;
 */
class PropostaRepositoryEloquent extends BaseRepository implements PropostaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Proposta::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
