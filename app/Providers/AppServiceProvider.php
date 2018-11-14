<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */


    public function boot()
    {
        \Schema::defaultStringLength(191);
        if(env('APP_ENV') === 'production'){
            URL::forceScheme('https');    //For Heroku
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
