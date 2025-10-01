<?php

namespace App\Providers;

use App\Infrastructure\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
    public function boot()
    {
        Inertia::share([
            'settings' => function () {
                return Setting::pluck('value', 'key');
            },
        ]);
    }

}
