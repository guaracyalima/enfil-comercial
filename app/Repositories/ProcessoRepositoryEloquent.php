<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProcessoRepository;
use App\Models\Processo;
use App\Validators\ProcessoValidator;

/**
 * Class ProcessoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ProcessoRepositoryEloquent extends BaseRepository implements ProcessoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Processo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
