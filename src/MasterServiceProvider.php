<?php

namespace Learning\Pkg;

use Illuminate\Support\ServiceProvider;

class MasterServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__ ."/resources/view/","Learning\Pkg");

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/');
        $this->publishes([__DIR__.'/../database/migrations/' => database_path('migrations/')], 'migrations');

        include __DIR__.'/Models/testing.php';
    }
}
