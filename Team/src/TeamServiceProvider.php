<?php

namespace Startappz\Team;

use Illuminate\Support\ServiceProvider;

class TeamServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations')
        ], 'migrations');
    }

    public function register()
    {
        // Register any additional services or bindings
    }
}