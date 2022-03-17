<?php

namespace Jaswinder\Testpackag1\Laravel;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function boot() 
    {
        $this->publishes([
            __DIR__.'/../config/testpackage.php' => config_path('testpackage.php'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}