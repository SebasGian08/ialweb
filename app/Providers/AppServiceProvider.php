<?php

namespace App\Providers;

use App\Models\Carrera;
use App\Models\Configuracion;
use Illuminate\Support\Facades\View;
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
        View::share([
            'Configuration' => Configuracion::find(1),
            'Carreras' => Carrera::all()
        ]);
    }
}
