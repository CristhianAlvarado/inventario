<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    /* public function register()
    {
        //
    } */

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.partials.sidebar', 'App\Http\ViewComposers\ModuloListComposer');
        View::composer('layouts.partials.sidebar', 'App\Http\ViewComposers\LevelsListComposer');    
        View::composer('layouts.app', 'App\Http\ViewComposers\ConfiguracionComposer');    
    }
}
