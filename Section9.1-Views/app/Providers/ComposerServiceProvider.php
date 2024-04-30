<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composer\UserViewComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer(['dashboard','profile'], UserViewComposer::class);

//        view()->composer(['dashboard', 'profile'], function ($view){
//            $view->with('user', new User('saba', 'saba27ge@gmail.com'));
//        });
    }
}
