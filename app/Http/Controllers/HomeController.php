<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index() {

$products=Product::all();
$data=compact('products');
       return view('home')->with($data);
   }
}
