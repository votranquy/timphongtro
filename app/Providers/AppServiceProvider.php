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

    //Host
    public function boot()
    {
        URL::forceScheme('https');
    }
    //Local
    // public function boot()
    // {
    //     //
    // }

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
