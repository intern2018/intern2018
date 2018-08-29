<?php
namespace App\Providers;
use App\Item;
use Illuminate\Support\ServiceProvider;

class itemname extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('itemnames',Item::all());
        });
    }
}