<?php

namespace Waygou\XheetahApi;

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
             ->namespace('\Waygou\XheetahApi')
             ->group(path_separators(__DIR__.'/../routes/api.php'));
    }

    public function register()
    {
    }
}
