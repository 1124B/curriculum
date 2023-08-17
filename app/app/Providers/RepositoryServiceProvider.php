<?php

namespace App\Providers;

use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Binding of models
     * 
     * @var array
     */
    private $models = [
        'User',
        'UserToken'
    ];

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
        // foreach ($this->models as $model) {
        //     $this->app->bind(
        //         "App\Repositories\Interfaces\\{$model}RepositoryInterface",
        //         "App\Repositories\\{$model}Repository"
        //     );
        // }
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
