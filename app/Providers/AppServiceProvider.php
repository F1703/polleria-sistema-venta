<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //esto para subir en hostinger.es
        // renombre mi carpeta public por public_html
        // $this->app->bind('path.public',function(){
        //   return base_path().'/public_html';
        // });
    }
}
