<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function afterPayment(Request $request)
    {
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
            'status'=>'WAITING'

        ]);

        session()->remove('basket');

        return redirect("/ordersCustomer?key=S");

    }

    public function showA ()
    {
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        if($currentUser->userType="Administrator")
        {
            $orders=Order::all();

            return View('mpage')->with('page','ordersAdmin')->with("orders",$orders);
        }


    }

    public function showC (Request $request)
    {


        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        if($currentUser->userType="Customer")
        {
            $orders=DB::table('orders')
                ->where('ownerId', $currentUser->id )
                ->get();

            return View('mpage')->with('page','ordersCustomer')->with("orders",$orders)->with('succ',$request->query('key'));

            /*foreach ($orders as $o)
            {
                 echo '<H1 style="color: #00bf3f">Payment SUCCESSFUL!</H1>'.$o->ownerId."----";
            }*/
        }


    }

    public function detailsC ($id)
    {
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        if($currentUser->userType="Customer")
        {
            $orders=DB::table('orders')
                ->where('id', $id )
                ->get();

            $products=json_decode($orders[0]->productIds);
            $quantity=json_decode($orders[0]->quantityIds);
            $izlezP=array();
            foreach ($products as $p)
            {
                array_push($izlezP,DB::table('products')
                    ->where('id', $p )
                    ->get()[0] );
            }

            return View('mpage')->with('page','orderCustomerDetails')->with("order",$orders[0])
                ->with("products",$izlezP)->with("quantity",$quantity);

        }


    }

    public function detailsA ($id)
    {
        $currentUser = null;
        if(!Auth::guest()){
            $currentUser = Auth::user();
        }
        if($currentUser->userType="Administrator")
        {
            $orders=DB::table('orders')
                ->where('id', $id )
                ->get();
            $user=DB::table('users')
                ->where('id', $orders[0]->ownerId )
                ->get()[0];

            $products=json_decode($orders[0]->productIds);
            $quantity=json_decode($orders[0]->quantityIds);
            $izlezP=array();
            foreach ($products as $p)
            {
                array_push($izlezP,DB::table('products')
                    ->where('id', $p )
                    ->get()[0] );
            }

            return View('mpage')->with('page','orderAdminDetails')->with("order",$orders[0])
                ->with("products",$izlezP)->with("quantity",$quantity)->with("user",$user);

        }


    }

    public function accept($id)
    {
        DB::table('orders')
            ->where('id', $id)
            ->update(['status' => 'CONFIRMED']);

        return redirect()->back();

    }







}
