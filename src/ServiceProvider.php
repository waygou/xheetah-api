<?php

namespace Waygou\XheetahApi;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->loadRoutes();
    }

    protected function loadRoutes()
    {
        // Load Routes example.
        Route::middleware(['api'])
             ->prefix('api')
             ->namespace('\Waygou\XheetahApi')
             ->group(__DIR__.'/../routes/api.php');
    }

    public function register()
    {
    }
}
