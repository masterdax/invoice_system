<?php

namespace App\Providers;

//use Illuminate\Support\facades\Schema;
use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    //public function register()
    //{
      //  Schema::DefaultStringLength(191);
    //}

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::DefaultStringLength(191);
    }
}
