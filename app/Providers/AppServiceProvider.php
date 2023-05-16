<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Http\ViewComposers\HomeComposer;
use Illuminate\Support\Facades\View;

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
    /*public function boot()
    {
        Schema::defaultStringLength(191);
    }*/

    public function boot()
    {
        View::composer(['front.layout', 'front.index'], HomeComposer::class);
    }

}
