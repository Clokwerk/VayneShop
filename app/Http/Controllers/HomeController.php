<?php

namespace App\Http\Controllers;

class HomeController extends  Controller
{
    function getHomePage(){

        return view('home');
    }

    function getAboutUsPage(){
        return View('about-us');
    }

    function getContactUsPage(){
        return View('contact-us');
    }
}
