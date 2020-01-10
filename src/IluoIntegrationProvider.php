<?php

namespace serwin35\IluoIntegration;

use Illuminate\Contracts\Events\Dispatcher;
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
        //$this->registerEvents();
/*
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'authentication-log');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'authentication-log');
*/
        $this->mergeConfigFrom(__DIR__.'/../config/iluo.php', 'iluo');

        if ($this->app->runningInConsole()) {
            /*
            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'authentication-log-migrations');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/authentication-log'),
            ], 'authentication-log-views');

            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/authentication-log'),
            ], 'authentication-log-translations');
*/
            $this->publishes([
                __DIR__.'/../config/iluo.php' => config_path('iluo.php'),
            ], 'iluo-config');
        }
    }

    /**
     * Register the Iluo events.
     *
     * @return void
    protected function registerEvents()
    {
        $events = $this->app->make(Dispatcher::class);

        foreach ($this->events as $event => $listeners) {
            foreach ($listeners as $listener) {
                $events->listen($event, $listener);
            }
        }
    }
     */

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
