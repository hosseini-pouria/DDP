<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Notification\Notifier;
use Src\Notification\TelegramAPI;
use Src\Notification\TelegramNotifierAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Notifier::class, function ($app){
            return new TelegramNotifierAdapter(new TelegramAPI(), 'sgsgsf464agfgasf');
        });
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
