<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\TestRepository;
use App\Repositories\TestInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(TestInterface::class,TestRepository::class);  
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
