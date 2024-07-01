<?php

namespace App\Providers\Filament;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class FilamentServiceProvider extends ServiceProvider
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
        Filament::serving(function () {
            Gate::define('access-filament', function ($user) {
                return $user->isAdmin();
            });

            // Override Filament's default authentication
            Filament::auth(function ($request) {
                $user = $request->user();
                return $user && Gate::allows('access-filament', $user);
            });
        });
    }
}
