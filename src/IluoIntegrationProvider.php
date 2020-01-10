<?php

namespace serwin35\IluoIntegration;

use Illuminate\Support\ServiceProvider;

class IluoIntegrationProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        include __DIR__.'/routes/web.php';
        $this->app->make('serwin35\IluoIntegration\IluoController');

    }
}
