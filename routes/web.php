<?php

use Illuminate\Support\Facades\Route;
use Saseuz\LaravelAdminlteRdy\Http\Controllers\DashboardController;

use Saseuz\LaravelAdminlteRdy\View\Components\Layout;

Route::get('/test-component', function () {
    $component = new Layout;
    return $component->render();
});

Route::group([
    'prefix' => admin_route(),
    'as'     => admin_route().'.'
], function() {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('site-settings', [DashboardController::class, 'settings'])->name('site-settings');

});
