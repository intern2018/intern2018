<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
>>>>>>> 2c14e739fb7ae1190eced564acf95a69900aea8d

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
<<<<<<< HEAD
        Schema::defaultStringLength(191);
=======
>>>>>>> 2c14e739fb7ae1190eced564acf95a69900aea8d
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
