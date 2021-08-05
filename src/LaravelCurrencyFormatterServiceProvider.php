<?php

namespace Magarrent\LaravelCurrencyFormatter;

use Illuminate\Support\ServiceProvider;

class LaravelCurrencyFormatterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('currency', function ($app) {
            return new Currency();
        });
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
