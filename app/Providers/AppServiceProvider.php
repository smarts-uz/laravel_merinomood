<?php

namespace App\Providers;

use App\Observers\OrderObserver;
use App\Observers\VariationObserver;
use App\Order;
use App\Variation;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Order::observe(OrderObserver::class);
        Variation::observe(VariationObserver::class);
        Carbon::setLocale($this->app->getLocale());

        //Macroses
        Str::macro('limitHTML', function ($value, $limit = 100, $end = '...') {
            return Str::limit(str_replace(["\r", "\n"], '', strip_tags($value)), $limit, $end);
        });
    }
}
