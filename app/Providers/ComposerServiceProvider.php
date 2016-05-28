<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\ServiceProvider;
use Request;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $view->with('auth', Auth::user());
            }

            $route = Request::route()->getName();
            if (starts_with($route, 'admin.caches')) {
                $view->with('section', 'caches');
            } elseif (starts_with($route, 'admin.users')) {
                $view->with('section', 'users');
            } else {
                $view->with('section', '');
            }
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
