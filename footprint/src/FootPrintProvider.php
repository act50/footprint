<?php

namespace Cjc\FootPrint;

use Illuminate\Support\ServiceProvider;

class FootPrintProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        $this->loadMigrationsFrom(__DIR__.'../2019_02_07_105554_create_exception_table.php');
//
//        $this->publishes([
//            __DIR__.'../config.php' => config_path('exception_recorder.php'),
//        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'footprint',
            new FootPrint
        );
    }
}
