<?php

namespace Nikcani\SmartInventorySnipeItPlugin;

use Illuminate\Support\ServiceProvider;

class SmartInventorySnipeItPluginServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'smart-inventory-snipe-it-plugin');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'smart-inventory-snipe-it-plugin');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('smart-inventory-snipe-it-plugin.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/smart-inventory-snipe-it-plugin'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/smart-inventory-snipe-it-plugin'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/smart-inventory-snipe-it-plugin'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'smart-inventory-snipe-it-plugin');

        // Register the main class to use with the facade
        $this->app->singleton('smart-inventory-snipe-it-plugin', function () {
            return new SmartInventorySnipeItPlugin;
        });
    }
}
