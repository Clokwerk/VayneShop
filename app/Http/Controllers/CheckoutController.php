<?php

namespace App\Http\Controllers;

class CheckoutController extends  Controller
{
    function getCheckoutPage()
    {
        return view('mpage')->with('page','checkout');
    }

}
