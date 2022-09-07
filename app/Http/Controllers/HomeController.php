<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends  Controller
{
    function getHomePage(){
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
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
        return view('mpage')->with('products',$products)->with('mostPopular',$mostPopular)->with('user',$currentUser)->with('page','home');
    }

    function getAboutUsPage(){
        return View('mpage')->with('page','about-us');
    }

    function getContactUsPage(){
        if(!Auth::guest()) {

            return View('mpage')->with('page', 'contact-us');
        }
        else{
            return redirect('/loginPage');
        }
    }

    function primer(){
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        $productIds=array();
        $quantityIds=array();
        $totalPrice=0;
        $ownerId=$currentUser->id;



        $basket = session()->get('basket');
        $i=0;
        foreach ($basket as $b)
        {

                $productIds[$i]= $b["id"];
                $quantityIds[$i]= $b["item_qty"];
                $totalPrice+=$b["price"] * $b["item_qty"];;

                $i=$i+1;

        }



        DB::table('orders')->insert([
            'ownerId' => $ownerId,
            'productIds' => json_encode($productIds),
            'quantityIds' => json_encode($quantityIds),
            'totalPrice' => $totalPrice,

        ]);

        session()->remove('basket');

        return redirect("/orderCustomer");


    }
    public function profile()
    {
        return View("mpage")->with('page','profile');
    }


}
