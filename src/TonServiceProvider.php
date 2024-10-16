<?php

namespace BlackPanda;

use Illuminate\Support\ServiceProvider;

class TonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Bind any services or classes to the container here.
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        // Publishing the configuration file
        $this->publishes([
            __DIR__.'/../../config/ton.php' => config_path('ton.php'),
        ], 'ton-config');
        // Perform any actions needed during package booting.
    }
}
