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
        $this->loadHelpers();

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'kladmin');

        $router = $this->app['router'];

        // register package middleware
        $router->aliasMiddleware('isGuest', 'Xeight8\Kladmin\Http\Middleware\Auth\GuestMiddleware');
        $router->aliasMiddleware('isLoggedIn', 'Xeight8\Kladmin\Http\Middleware\Auth\AuthenticatedMiddleware');

        if ($this->app->runningInConsole()) {
            // publish assets
            $this->registerPublishables();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../publishable/config/kladmin.php', 'kladmin');
    }

    /**
     * Load application helpers.
     *
     * @return void
     */
    protected function loadHelpers()
    {
        foreach (glob(__DIR__.'/Helpers/*.php') as $filename) {
            require_once $filename;
        }
    }

    /**
     * Register any application publishables
     *
     * @return void
     */
    protected function registerPublishables()
    {
        $publishablePath = dirname(__DIR__).'/publishable';

        $publishables = [
            'assets' => [
                $publishablePath . '/assets/' => public_path(config('kladmin.assets_path'))
            ],
            'config' => [
                $publishablePath . '/config/' => config_path()
            ]
        ];

        foreach ($publishables as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }

}
