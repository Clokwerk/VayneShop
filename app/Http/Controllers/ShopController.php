<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class ShopController extends  Controller
{
    function getShopPage()
    {
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        $products = Product::all();
        $mostPopular = [];
        if(!empty($products)){
            $mostPopular = $products->random(3);
        }
        $page='shop';
        return View("mpage")->with('products',$products)->with('mostPopular',$mostPopular)->with('user',$currentUser)
            ->with('page',$page);
    }

    function getProductDetailPage($id){

       if( $product = Product::find($id)){
           echo $product->value('name');
           return View('detail',(['name'=>$product->name,'image'=>$product->image,'price'=>$product->price,'description'=>$product->description,'availability'=>$product->availability]));
       };
        return Redirect::route('shop');


    }
}
