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
        $this->mergeConfigFrom(__DIR__.'/../config/iluo.php', 'iluo');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/iluo.php' => config_path('iluo.php'),
            ], 'iluo-config');
        }
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
