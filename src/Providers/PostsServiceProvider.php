<?php

namespace FxApp\Posts\Providers;

use FxApp\Posts\Console\Commands\PostCommand;
use Illuminate\Support\ServiceProvider;

class PostsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        //dd("test");
        //connect package
        $this->loadRoutesFrom(__DIR__.'/../routes/posts.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'posts');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //publication views
        //php artisan vendor:publish (12)
        $this->publishes([
            __DIR__.'/../config/posts.php' => config_path('posts.php')
        ]);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/posts'),
        ]);

        // Run Console Command
        if ($this->app->runningInConsole()) {
            $this->commands([
                PostCommand::class,
            ]);
        }

        //        $this->publishes([
        //            __DIR__.'/../database/migrations/' => database_path('migrations')
        //        ], 'courier-migrations');
    }
}
