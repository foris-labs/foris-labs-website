<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (str_contains(config('app.url'), 'https')) {
            url()->forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Request::macro('hasValidSignature', function ($absolute = true) {
            if (config('app.env') === 'local') return true;
            return URL::hasValidSignature($this, $absolute);
        });

        Request::macro('hasValidRelativeSignature', function () {
            if (config('app.env') === 'local') return true;
            return URL::hasValidSignature($this, $absolute = false);
        });

        Request::macro('hasValidSignatureWhileIgnoring', function ($ignoreQuery = [], $absolute = true) {
            if (config('app.env') === 'local') return true;
            return URL::hasValidSignature($this, $absolute, $ignoreQuery);
        });

        JsonResource::withoutWrapping();
    }
}
