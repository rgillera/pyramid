<?php

namespace Vqpoint\Pyramid\Providers;

use Illuminate\Support\ServiceProvider;

class PyramidServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../routes.php';
    }
}
