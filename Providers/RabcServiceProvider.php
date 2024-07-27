<?php

namespace Dev\Rabc\Providers;

use Illuminate\Support\ServiceProvider;

class RBACServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Publish config file
        $this->publishes([
            __DIR__.'/../config/rabc.php' => $this->app->configPath('rabc.php'),
        ]);
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}