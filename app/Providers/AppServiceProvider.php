<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator as Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('pt_BR');
        });

        $this->app->bind(
            'App\Repositories\Contracts\AdmRepositoryInterface',
            'App\Repositories\Eloquent\AdmRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\SuporteRepositoryInterface',
            'App\Repositories\Eloquent\SuporteRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\PassageiroRepositoryInterface',
            'App\Repositories\Eloquent\PassageiroRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\BilheteRepositoryInterface',
            'App\Repositories\Eloquent\BilheteRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\LinhasRepositoryInterface',
            'App\Repositories\Eloquent\LinhasRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\ConsumoRepositoryInterface',
            'App\Repositories\Eloquent\ConsumoRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ReajusteRepositoryInterface',
            'App\Repositories\Eloquent\ReajusteRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\PrecoRepositoryInterface',
            'App\Repositories\Eloquent\PrecoRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CompraRepositoryInterface',
            'App\Repositories\Eloquent\CompraRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CarroRepositoryInterface',
            'App\Repositories\Eloquent\CarroRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CatracaRepositoryInterface',
            'App\Repositories\Eloquent\CatracaRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\AjudaRepositoryInterface',
            'App\Repositories\Eloquent\AjudaRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\PedidoBilheteRepositoryInterface',
            'App\Repositories\Eloquent\PedidoBilheteRepository'
        );
    }
    

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
