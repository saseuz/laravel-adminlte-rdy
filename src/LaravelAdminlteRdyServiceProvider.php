<?php

namespace Saseuz\LaravelAdminlteRdy;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Saseuz\LaravelAdminlteRdy\View\Components\Layout;

class LaravelAdminlteRdyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/components', 'adminlte');

        Blade::component(Layout::class, 'admin-layout');

        $this->publishes([
            __DIR__ . '/../routes/backend.php' => base_path('routes/backend.php'),
            __DIR__ . '/Http/Controllers/Backend' => app_path('Http/Controllers/Backend'),
            __DIR__ . '/../resources/views/backend' => resource_path('views/backend'),
            __DIR__ . '/../resources/views/components' => resource_path('views/backend/components'),
            __DIR__ . '/assets' => public_path('adminlte'),
            __DIR__ . '/../config' => config_path(),
        ], 'install-adminlte');
    }

    public function register()
    {
        require_once __DIR__.'/helpers.php';
    }
}