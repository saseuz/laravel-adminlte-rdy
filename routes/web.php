<?php

use Illuminate\Support\Facades\Route;
use Saseuz\LaravelAdminlteRdy\Http\Controllers\DashboardController;

Route::group([
    'prefix' => admin_route(),
    'as'     => admin_route_name()
], function() {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('site-settings', [DashboardController::class, 'settings'])->name('site-settings');

});
