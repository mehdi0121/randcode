<?php
namespace Mehdi0121\Randcode;

use Illuminate\Support\ServiceProvider;

class RandCodeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        # code...
    }

    public function register()
    {
        # code...
        $this->app->singleton('randcode',function (){
            return new RandServies();
        });
    }

}
