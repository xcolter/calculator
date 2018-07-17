<?php

namespace Xcolter\Calculator;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        include __DIR__.'/routes.php';

        Route::get('calculator', function(){
            echo 'Hello from the calculator package!';
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Xcolter\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
