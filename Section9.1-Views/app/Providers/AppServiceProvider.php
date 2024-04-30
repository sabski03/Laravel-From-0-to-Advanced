<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

//class User{
//    public $username;
//    public $email;
//
//    function __construct($username, $email){
//        $this->username = $username;
//        $this->email = $email;
//    }
//}

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
//        $user = new User('saba', 'saba27ge@gmail.com');
//        View::share(['user' => $user ]);
//
//        view()->composer(['dashboard', 'profile'], function ($view){
//            $view->with('user', new User('saba', 'saba27ge@gmail.com'));
//        });
    }
}
