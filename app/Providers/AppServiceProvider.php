<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Contracts\UsuariosRepositoryInterface',
                         'App\Repositories\Eloquent\UsuariosRepository');
        
        $this->app->bind('App\Repositories\Contracts\ColaboradoresRepositoryInterface',
                         'App\Repositories\Eloquent\ColaboradoresRepository');
        
        
    }
}
