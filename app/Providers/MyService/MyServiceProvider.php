<?php

namespace App\Providers\MyService;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('My', function ($app) {
            return new My();
        });
    }
}
