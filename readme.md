# Laravel AdminLte Dashboard

Laravel AdminLte Dashboard is a Laravel library for Dashboard UI.

## Installation

Add this code in project `composer.json`
```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/saseuz/laravel-adminlte-rdy"
    }
],
```

Use the package manager [composer](https://getcomposer.org/) to install.

```bash
composer require saseuz/laravel-adminlte-rdy
```

Run this code in project to install UI and configs
```
php artisan vendor:publish --tag=install-adminlte
```

## Usage

Change admin's route/login url in project's config/admin.php

then call the route. Eg.
```
http://127.0.0.1:8000/5as3u7_/a4m1n/dashboard
```
