<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\PaymentModule\Handlers\ZarinPalHandler;
use Src\PaymentModule\Methods\OnlinePayment;
use Illuminate\Database\Connectors\ConnectionFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OnlinePayment::class, function ($app){
            $connection = resolve(connectionfactory::class);
            return  new OnlinePayment($connection->make('mysql'), new ZarinPalHandler());
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
