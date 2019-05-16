<?php

namespace App\Providers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Collection::macro('paginate', static function ($perPage) {
            return new LengthAwarePaginator(
                $this->forPage(Paginator::resolveCurrentPage(), $perPage),
                $this->count(),
                $perPage,
                Paginator::resolveCurrentPage(),
                ['path' => Paginator::resolveCurrentPath()]
            );
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
