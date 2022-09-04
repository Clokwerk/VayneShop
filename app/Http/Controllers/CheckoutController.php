<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends  Controller
{
    function getCheckoutPage()
    {
        $currentUser = Auth::user();
        $products = Product::all();
        $mostPopular = [];
        if(!is_null(Product::first())){
            if(Product::count() < 3){
                $mostPopular = $products;
            }else {
                $mostPopular = $products->random(3);
            }
        }
        return view('mpage')->with('products',$products)->with('mostPopular',$mostPopular)->with('user',$currentUser)->with('page','checkout');
    }

}
