<?php

namespace App\Providers;

use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepository;
use App\Repositories\Interfaces\UserTokenRepositoryInterface;
use App\Repositories\UserTokenRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class            
        );
        $this->app->bind(
            UserTokenRepositoryInterface::class,
            UserTokenRepository::class            
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
