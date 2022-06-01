<?php
 
namespace App\View\Composers;
use App\Models\Cart;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class HeaderComposers
{
   
    public function compose(View $view)
    {
        $user_id = session('user_id');
        $view->with('cart_items', Cart::join('product', 'cart.product_id', '=', 'product.id')->select('product.*','cart.*')->where('cart.user_id', '=', $user_id)
        ->get());
    }
}