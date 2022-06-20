<?php

namespace App\Http\Controllers;

class CartController extends  Controller
{
    function getCartPage()
    {
        return view('cart');
    }
}
