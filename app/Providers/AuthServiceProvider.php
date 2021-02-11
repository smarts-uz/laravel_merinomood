<?php

namespace App\Providers;

use App\Order;
use App\OrderVariation;
use App\Point;
use App\Policies\OrderPolicy;
use App\Policies\OrderVariationPolicy;
use App\Policies\PointPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Order::class => OrderPolicy::class,
        OrderVariation::class => OrderVariationPolicy::class,
        Point::class => PointPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
