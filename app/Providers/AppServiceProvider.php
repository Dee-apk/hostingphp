<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cart;

use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $cartCount = Cart::where('user_id', auth()->id())->sum('quantity');
            $view->with('cartCount', $cartCount);
        });
    }
}
