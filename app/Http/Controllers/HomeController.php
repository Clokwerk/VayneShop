<?php

namespace App\Http\Controllers;

class HomeController extends  Controller
{
    function getHomePage(){

        return view('layouts.base');
    }
}
