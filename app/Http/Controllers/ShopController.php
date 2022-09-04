<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class ShopController extends  Controller
{
    function getShopPage(Request $request)
    {
         $sort=$request->query('sort');
         $category=$request->query('category');

        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        $products = Product::all();


        if($sort!=null)
        {
            if($sort=='regular')
            {
                $products= DB::table('products')
                    ->orderBy('price', 'asc')
                    ->get();
            }
           else if($sort=='desc')
            {
                $products= DB::table('products')
                    ->orderBy('price', 'desc')
                    ->get();
            }
           else
           {
               $products = DB::table('products')
                   ->get();
           }

        }
        else
        {
            $products = Product::all();
        }

        $outProducts=array();
        if($category!=null)
        {
            foreach ($products as $p) {
                if($p->category==$category) {
                    array_push($outProducts, $p);
                }

            }

        }
        else
        {
            $outProducts=$products;
        }

        $products = Product::all();
        $mostPopular = [];
        if(!is_null(Product::first())){
            if(Product::count() < 3){
                $mostPopular = $products;
            }else {
                $mostPopular = $products->random(3);
            }
        }
        $page='shop';
        return View("mpage")->with('products',$outProducts)->with('mostPopular',$mostPopular)->with('user',$currentUser)
            ->with('page',$page)->with('searched',"");
    }


    function search(Request $request)
    {
        $search=$request->query('search');
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }

        $outProducts=DB::table('products')
            ->where('name', 'like','%'.$search.'%' )
            ->orWhere('description', 'like','%'.$search.'%' )
            ->orWhere('category','like','%'.$search.'%')
            ->get();

        $products = Product::all();
        $mostPopular = [];
        if(!is_null(Product::first())){
            if(Product::count() < 3){
                $mostPopular = $products;
            }else {
                $mostPopular = $products->random(3);
            }
        }
        $page='shop';
        return View("mpage")->with('products',$outProducts)->with('mostPopular',$mostPopular)->with('user',$currentUser)
            ->with('page',$page)->with('searched',$search);
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

           return View('mpage',(['id'=>$product->id,'name'=>$product->name,'image'=>$product->image,'price'=>$product->price,'description'=>$product->description,'availability'=>$product->availability]))
               ->with('sameCategory',$sameCateogry)->with('page','detail');
       };
        return Redirect::route('shop');


    }
}
