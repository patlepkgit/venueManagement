<?php

namespace App\Providers;

use App\EventType;
use App\Location;
use Illuminate\Support\Facades\View as FacadesView;
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
        FacadesView::composer('*', function ($view){
            $view->with('globalLocations',Location::all());
            $view->with('globaleventTypes',EventType::all());
        });
    }
}
