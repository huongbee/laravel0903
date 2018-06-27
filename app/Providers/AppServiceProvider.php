<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // share for all
        //View::share('key',"value");
        //View::share('menu',"Menu Select from Database");

        // share only admin.layout
        View::composer('admin.layout',function($view){
            $view->with('menu',"Menu Select from Database");
        });

        // share for admin.layout, admin.about
        View::composer(['admin.layout','admin.about'],function($view){
            $view->with('menu',"Menu Select from Database");
        });
        // share for all
        View::composer('*',function($view){
            $view->with('menu',"Menu Select from Database");
        });
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
