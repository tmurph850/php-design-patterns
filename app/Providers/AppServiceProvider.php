<?php

namespace App\Providers;

use App\Strategy\CreditCardDriver;
use App\Strategy\GooglePayDriver;
use App\Strategy\PaymentGateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PaymentGateway::class, function($app) {
            return new PaymentGateway(
              new CreditCardDriver()
            );
        });

        $this->app->bind(CreditCardDriver::class, function($app) {
            return new CreditCardDriver();
        });

        $this->app->bind(GooglePayDriver::class, function($app) {
            return new GooglePayDriver();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
