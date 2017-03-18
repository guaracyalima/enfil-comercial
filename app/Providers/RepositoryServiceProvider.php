<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\AgendaRepository',
            'CodeDelivery\Repositories\AgendaRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\BudgetRepository',
            'CodeDelivery\Repositories\BudgetRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ClienteRepository',
            'CodeDelivery\Repositories\ClienteRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\FornecedorRepository',
            'CodeDelivery\Repositories\FornecedorRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\PessoaRepository',
            'CodeDelivery\Repositories\PessoaRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ProcessoRepository',
            'CodeDelivery\Repositories\ProcessoRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\PropostaRepository',
            'CodeDelivery\Repositories\PropostaRepositoryEloquent'
        );
    }
}
