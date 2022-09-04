<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CheckoutController extends  Controller
{
    function getCheckoutPage()
    {
        $products = Product::all();
        $mostPopular = [];
        if(!is_null(Product::first())){
            if(Product::count() < 3){
                $mostPopular = $products;
            }else {
                $mostPopular = $products->random(3);
            }
        }
        return view('mpage')->with('products',$products)->with('mostPopular',$mostPopular)->with('page','checkout');
    }

}
