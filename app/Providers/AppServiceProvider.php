<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
        // $titles = [
        //     ['name' => 'Home', 'icon' => 'fa fa-home'],
        //     ['name' => 'Burgerschap', 'icon' => 'fa fa-info-circle'],
        // ];
    
        // // Share the $titles array globally with all views
        // View::share('titles', $titles);
    }
}
