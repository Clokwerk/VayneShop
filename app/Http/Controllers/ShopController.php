<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
class ShopController extends  Controller
{
    function getShopPage()
    {
        $products =Product::all();
        $mostPopular = $products->random(3);
        return View("shop")->with('products',$products)->with('mostPopular',$mostPopular);
    }

    function getProductDetailPage($id){

       if( $product = Product::find($id)){
           echo $product->value('name');
           return View('detail',(['name'=>$product->name,'image'=>$product->image,'price'=>$product->price,'description'=>$product->description,'availability'=>$product->availability]));
       };
        return Redirect::route('shop');


    }
}
