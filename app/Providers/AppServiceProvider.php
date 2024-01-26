<?php

namespace App\Providers;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
