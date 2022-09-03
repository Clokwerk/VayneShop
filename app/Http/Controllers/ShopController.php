<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
           $products=DB::select('select * from products u where u.category = :cat', ['cat' => $product->category]);
$sameCateogry=array();
           if($products!=null)
           {


                   foreach ($products as $p) {
                       if($p->id!=$product->id) {
                           array_push($sameCateogry, $p);
                       }
                       if(count($sameCateogry)>=3) {
                           break;
                       }
                   }



           }

           return View('mpage',(['name'=>$product->name,'image'=>$product->image,'price'=>$product->price,'description'=>$product->description,'availability'=>$product->availability]))
               ->with('sameCategory',$sameCateogry)->with('page','detail');
       };
        return Redirect::route('shop');


    }
}
