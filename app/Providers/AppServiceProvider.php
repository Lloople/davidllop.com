<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $age = Carbon::now()->diffInYears(Carbon::parse('1992-10-26'));

            return $view->with('age', $age);
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
