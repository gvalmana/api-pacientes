<?php

namespace App\Providers\v1;

use App\Services\v1\PacienteService;
use Illuminate\Support\ServiceProvider;

class PacienteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(PacienteService::class, function ($app)
        {
            return new PacienteService();
        });
    }
}
