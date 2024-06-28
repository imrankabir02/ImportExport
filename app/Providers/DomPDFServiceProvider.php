<?php

namespace App\Providers;

use Dompdf\Dompdf;
use Illuminate\Support\ServiceProvider;

class DomPDFServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->singleton('dompdf', function ($app) {
            return new Dompdf();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
