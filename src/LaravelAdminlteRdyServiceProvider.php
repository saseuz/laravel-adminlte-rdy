<?php

namespace Saseuz\LaravelAdminlteRdy;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Saseuz\LaravelAdminlteRdy\View\Components\Layout;

class LaravelAdminlteRdyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'adminlte');

        Blade::component(Layout::class, 'admin-layout');

        $this->publishes([
            __DIR__ . '/assets' => public_path('adminlte'),
            __DIR__ . '/../config' => config_path(),
        ], 'install-adminlte');
    }

    public function register()
    {
        require_once __DIR__.'/helpers.php';
    }
}