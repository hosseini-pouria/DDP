<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\FactoryMethod\Publisher\LinkedInPublisher;
use Src\FactoryMethod\Publisher\LinkedInPublisherFactory;
use Src\FactoryMethod\Publisher\MessagePublisher;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MessagePublisher::class, LinkedInPublisherFactory::class);
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
