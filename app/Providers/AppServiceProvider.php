<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        // if (\App::environment('local')) {
        //     // \URL::forceScheme('https');
        // }
        // if (config('app.env') === 'local') {
        if (app()->isLocal()) {
            \URL::forceScheme('http');
        }

        if (config('app.env') === 'production') {
            \URL::forceScheme('https');
        }

        Schema::defaultStringLength(191);
    }
}
