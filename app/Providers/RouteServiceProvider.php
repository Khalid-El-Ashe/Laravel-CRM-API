<?php

declare(strinc_type=1); # this line is mean using (Strict Type Checking) in all file

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    protected function configureRateLimiting()
    {
        RateLimiter::for(
            'apo',
            fn(Request $request) =>
            Limit::perMinute(maxAttempts: 60)->by(optional($request->user())->id ?: $request->ip())
        );
    }
}
