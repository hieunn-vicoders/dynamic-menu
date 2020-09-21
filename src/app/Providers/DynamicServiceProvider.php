<?php

namespace VCComponent\Laravel\Dynamic\Providers;

use Illuminate\Support\ServiceProvider;

class DynamicServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
        $this->publishes([
            __DIR__ . '/../../config/admin-menu-config.php' => config_path('admin-menu-config.php'),
        ], 'config');
    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
