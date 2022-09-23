<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Theme;
use App\Models\SiteSetting;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer(['admin.*'], function($view){
            $view->with('themes', Theme::first());
        });
        View::composer(['admin.*'], function($view){
            $view->with('setting', SiteSetting::first());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
