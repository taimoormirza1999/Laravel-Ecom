<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    public function index($id) {

       $product= Product::find($id);
       $products_img= Product::limit(3)->get('p_img');

        $data1=compact('product','products_img');
       
        return view('product')->with($data1);
    }

   


    public function listed_product() {

        return redirect('home#trending_product');
    }
    
}
