<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\AbstractFactory\FormBuilder\FromUIFactoryInterface;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\bootstrapFormUIFactory;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\TailwindFormUIFactory;
use Src\AbstractFactory\ReportFactory\HTMLReport\HTMLReportFactory;
use Src\AbstractFactory\ReportFactory\ReportFactoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FromUIFactoryInterface::class, TailwindFormUIFactory::class);

        $this->app->bind(ReportFactoryInterface::class, HTMLReportFactory::class);
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
