<?php

namespace App\Providers;

// use Illuminate\View\View;
use App\Models\Cart;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
// FacadesSession

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

        view()->composer('*', function ($view) {
            $user_id = Session::get('user_id');
            // $view->with('cart_items', Session::get('user_id') );  
            $view->with('cart_items', Cart::join('product', 'cart.product_id', '=', 'product.id')->select('product.*', 'cart.*')->where('cart.user_id', '=', $user_id)
                ->get());
            // echo Session::get('user_id');  
        });
    }
}
