<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends  Controller
{
    function getHomePage(){
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        $products = Product::all();
        $mostPopular = [];
        if(!empty($products)){
            $mostPopular = $products->random(3);
        }
        return view('mpage')->with('products',$products)->with('mostPopular',$mostPopular)->with('user',$currentUser)->with('page','home');
    }

    function getAboutUsPage(){
        return View('mpage')->with('page','about-us');
    }

    function getContactUsPage(){
        return View('mpage')->with('page','contact-us');
    }

    function primer(){
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        return View('mpage')->with('user',$currentUser)->with('page','shop');;
    }
}
