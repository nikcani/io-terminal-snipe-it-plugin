<?php

namespace Nikcani\IoTerminalSnipeItPlugin;

use Illuminate\Support\ServiceProvider;
use Nikcani\IoTerminalSnipeItPlugin\Console\Commands\InitCommand;

class IoTerminalSnipeItPluginServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'io-terminal-snipe-it-plugin');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'io-terminal-snipe-it-plugin');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('io-terminal-snipe-it-plugin.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/io-terminal-snipe-it-plugin'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/io-terminal-snipe-it-plugin'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/io-terminal-snipe-it-plugin'),
            ], 'lang');*/

            // Registering package commands.
            $this->commands([
                InitCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'io-terminal-snipe-it-plugin');

        // Register the main class to use with the facade
        $this->app->singleton('io-terminal-snipe-it-plugin', function () {
            return new IoTerminalSnipeItPlugin;
        });
    }
}
