<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends  Controller
{
    function getHomePage(){
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        return view('home')->with('user',$currentUser);
    }

    function getAboutUsPage(){
        return View('about-us');
    }

    function getContactUsPage(){
        return View('contact-us');
    }
}
