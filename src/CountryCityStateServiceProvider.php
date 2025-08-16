<?php

namespace UsamaMuneerChaudhary\CountryCityState;

use Illuminate\Support\ServiceProvider;

class CountryCityStateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/migrations' => database_path('migrations'),
                __DIR__.'/Models' => app_path('Models'),
                __DIR__.'/Helpers' => app_path('Helpers'),
                __DIR__.'/seeds' => database_path('seeders'),
            ], 'CountryCityState');

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('country-city-state.php'),
            ], 'config');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'country-city-state');
        
        $this->app->singleton('country-city-state', function () {
            return new CountryCityState;
        });
    }
}
