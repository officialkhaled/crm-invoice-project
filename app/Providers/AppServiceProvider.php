<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Carbon::macro('greetings', function () {
            $hour = Carbon::now()->hour;

            if ($hour < 12) {
                return "Good Morning, ";
            }
            if ($hour < 17) {
                return "Good Afternoon, ";
            }
            return "Good Evening, ";
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
