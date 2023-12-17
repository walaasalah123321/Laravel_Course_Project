<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RespstoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->bind(
        'App\Http\Interfaces\EndUserInterface',
        'App\Http\Repostry\EndUserRepostries'
       );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
