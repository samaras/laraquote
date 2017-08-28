<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Quote' => 'App\Policies\QuotePolicy',
        'App\Models\Category' => 'App\Policies\CategoryPolicy',
        'App\Models\Currency' => 'App\Policies\CurrencyPolicy',
        'App\Models\Discount' => 'App\Policies\DiscountPolicy',
        'App\Models\ExchangePrice' => 'App\Policies\ExchangePricePolicy',
        'App\Models\Group' => 'App\Policies\GroupPolicy',
        'App\Models\Product' => 'App\Policies\ProductPolicy',
        'App\Models\Status' => 'App\Policies\StatusPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);

        //
    }
}
