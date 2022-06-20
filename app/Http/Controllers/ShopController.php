<?php

namespace App\Http\Controllers;

class ShopController extends  Controller
{
    function getShopPage()
    {
        return view('shop');
    }
}
