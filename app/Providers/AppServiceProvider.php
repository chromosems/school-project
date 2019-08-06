<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\Company;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        
        /*
         * this is a class based composer view
         */


        View::share('services', Service::all());
        Schema::defaultStringLength(191);


        View::share('companies', Company::all());
        Schema::defaultStringLength(191);

    }

}
