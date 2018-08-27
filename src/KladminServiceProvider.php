<?php

namespace Xeight8\Kladmin;

use Illuminate\Support\ServiceProvider;

class KladminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'kladmin');

        $router = $this->app['router'];

        // register package middleware
        $router->aliasMiddleware('isGuest', 'Xeight8\Kladmin\Http\Middleware\Auth\GuestMiddleware');
        $router->aliasMiddleware('isLoggedIn', 'Xeight8\Kladmin\Http\Middleware\Auth\AuthenticatedMiddleware');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
