<?php

namespace App\Providers;

use App\Services\Implements\LocationsService;
use App\Services\Interfaces\ILocationsService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

//use Nette\Schema\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->singleton(ILocationsService::class, LocationsService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
