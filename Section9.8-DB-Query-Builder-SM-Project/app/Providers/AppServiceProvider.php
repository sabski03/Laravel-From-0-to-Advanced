<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        Password::defaults(function (){
            $theRules = Password::min(6)->mixedCase()->symbols()->numbers();
                return $this->app->isProduction() ? $theRules->uncompromised() : $theRules;
        });
    }
}
