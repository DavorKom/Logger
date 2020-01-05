<?php

namespace DavorKom\Logger;

use Illuminate\Support\ServiceProvider;

class LoggerServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('logger', function() {
            return new Logger;
        });
    }
}