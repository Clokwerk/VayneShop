<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends  Controller
{

    public function checkPermissions(){
        $currentUser = Auth::user();
        if($currentUser->userType == 'Customer'){
            return true;
        }else{
            return false;
        }
    }
    function getCartPage(Request $request)
    {

        $currentUser = Auth::user();
        $products = Product::all();
        $mostPopular = [];
        if(!is_null(Product::first())){
            if(Product::count() < 3){
                $mostPopular = $products;
            }else {
                $mostPopular = $products->random(3);
            }
        }
        return view('mpage')->with('products',$products)->with('mostPopular',$mostPopular)->with('user',$currentUser)->with('page','cart')
            ->with('key',$request->query('key'));
    }



    public function removeFromCart(Request $request)
    {
        if($request->id) {
            $basket = session()->get('basket');
            if(isset($basket[$request->id])) {
                unset($basket[$request->id]);
                session()->put('basket', $basket);
            }
             return redirect('cart');
        }
    }
    public function addToCart($id,$item_qty,Request $request)
    {
        $quantity = $request->input('product-quatity');

        if($quantity!=null)
        {
            $item_qty=$quantity;
        }


        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }
        $basket = session()->get('basket');
        // if basket is empty then this the first item
        if(!$basket) {
            $basket = [
                $id => [
                    "id" => $product->id,
                    "name" => $product->name,
                    "item_qty" =>  $item_qty,
                    "price" => $product->price,
                    "image" => $product->image
                ]
            ];
            session()->put('basket', $basket);
            return redirect()->back()->with('success', 'Item added to basket successfully!');
        }
        // if basket not empty then check if this item exist then increment item_qty
        if(isset($basket[$id])) {
            $basket[$id]['item_qty']++;
            session()->put('basket', $basket);
            return redirect()->back()->with('success', 'Item added to basket successfully!');
        }
        // if item not exist in basket then add to basket with item_qty = 1
        $basket[$id] = [
            "id" => $product->id,
            "name" => $product->name,
            "item_qty" => $item_qty,
            "price" => $product->price,
            "image" => $product->image
        ];


        session()->put('basket', $basket);
        return redirect()->back();
    }

    public function clearCart()
    {
        session()->remove('basket');
        return redirect('cart');
    }

    public function updateCart($id,$item_qty)
    {
        if($id and $item_qty)
        {
            $basket = session()->get('basket');
            $basket[$id]["item_qty"] = $item_qty;
            session()->put('basket', $basket);
            session()->flash('success', 'Your Cart updated successfully');
        }
    }

}
