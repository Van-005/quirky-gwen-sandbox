<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL as FacadesURL;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FacadesURL::forceScheme('https');
    }
}