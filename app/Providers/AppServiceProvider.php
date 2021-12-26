<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\EventDispatcher\EventDispatcher;
use Src\EventDispatcher\Logger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $eventDispatcher = new EventDispatcher();
        $eventDispatcher->attach('user:deleted', new Logger());
        $this->app->singleton(EventDispatcher::class, $eventDispatcher);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
