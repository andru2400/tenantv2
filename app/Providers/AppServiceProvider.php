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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
            Ayuda a clasificar la configuración de la BD a usar
        */
        if (env('APP_URL_CLEAN') === request()->getHost()) {
            config(['database.default' => 'landlord']);
        } else{
            config(['database.default' => 'tenant']);
        }
    }
}
