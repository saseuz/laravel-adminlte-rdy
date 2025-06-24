<?php

if (! function_exists('admin_login')) {
    function admin_login() {
        return config('admin.login');
    }
}

if (! function_exists('admin_route')) {
    function admin_route() {
        return config('admin.route');
    }
}

if (! function_exists('active_state')) {
    function active_state($url) {
        return request()->is(admin_route().$url);
    }
}

if (! function_exists('tree_active_state')) {
    function tree_active_state($urls = []) {

        $states = [];

        foreach ($urls as $url) {
            $states[] = request()->is(admin_route().$url);
        }
        
        return in_array(true, $states);
    }
}