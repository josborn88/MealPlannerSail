<?php

namespace App\Providers;

use App\Services\MealServices\MealServiceInterface;
use Illuminate\Support\ServiceProvider;
use App\Services\MealServices\MealService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(MealServiceInterface::class, function ($app) {
            return new MealService();
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
