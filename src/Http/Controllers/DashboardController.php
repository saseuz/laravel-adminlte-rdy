<?php

namespace Saseuz\LaravelAdminlteRdy\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('adminlte::backend.dashboard');
    }

    public function settings()
    {
        return view('adminlte::backend.site-settings');
    }
}