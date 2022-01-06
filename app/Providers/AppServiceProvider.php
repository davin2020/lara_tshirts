<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultstringLength(191);
        // to fix issue with massive Pagination buttons when more than 5 itesm in collection - The paginator now uses the Tailwind CSS framework for its default styling. In order to keep using Bootstrap, you should add the following method call to the boot method of your application's AppServiceProvider:
        Paginator::useBootstrap();
    }
}
