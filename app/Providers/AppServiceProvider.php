<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Repositories\Interface\FileRepositoryInterface::class,
            \App\Repositories\FileRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interface\AssetRepositoryInterface::class,
            \App\Repositories\AssetRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
