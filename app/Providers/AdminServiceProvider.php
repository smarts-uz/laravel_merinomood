<?php

namespace App\Providers;

use Arniro\Admin\Admin;
use Arniro\Admin\AdminApplicationServiceProvider;
use Illuminate\Support\Facades\Gate;

class AdminServiceProvider extends AdminApplicationServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Admin routes
     */
    protected function routes()
    {
        Admin::routes()
            ->withAuthenticationRoutes()
            ->register();
    }

    /**
     * Define gate for authorizing Admin panel
     */
    protected function gate()
    {
        Gate::define('viewAdmin', function ($user) {
            return in_array($user->email, ['admin@mail.ru']);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
