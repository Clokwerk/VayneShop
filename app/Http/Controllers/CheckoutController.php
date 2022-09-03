<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CheckoutController extends  Controller
{
    function getCheckoutPage()
    {
        $products = Product::all();
        $mostPopular = [];
        if(!empty($products)){
            $mostPopular = $products->random(3);
        }
        return view('mpage')->with('products',$products)->with('mostPopular',$mostPopular)->with('page','checkout');
    }

}
