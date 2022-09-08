<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
class AdminController extends Controller
{

    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        echo $email." ".$password;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if($user==null)
        {
            return redirect('/loginAdminPage?error=Invalid username or password!!!');
        }



        if($user->email == $email && $user->password == $password && $user->userType == 'Administrator'){
            Auth::login($user);


            return redirect('/ordersAdmin');
        }

        return redirect('/loginAdminPage?error=Invalid username or password!!!');

    }


    public function checkPermissions(){
        $currentUser = Auth::user();
        if($currentUser->userType == 'Administrator'){
            return true;
        }else{
            return false;
        }
    }


    public function getAdminPanelPage(){

        if($this->checkPermissions()) {
            $currentUser = Auth::user();
            $products = Product::all();
            return View('mpage')->with('user',$currentUser)->with('products',$products)->with('page','adminPanel');
        }else{
            return $this->getAdminLoginPage();
        }
    }

    public function getAdminLoginPage(Request $request){
        return View('mpage')->with('page','adminLogin')->with('error',$request->query('error'));
    }

    public function getNewProductPage(){

        if($this->checkPermissions()) {
            $currentUser = Auth::user();
            return View('mpage')->with('user',$currentUser)->with('page','newProductPage');
        }else{
            return $this->getAdminLoginPage();
        }
    }

    public function getEditProductPage($id){
        if($this->checkPermissions()) {
            $currentUser = Auth::user();
            $product = Product::find($id);
            return View('mpage')->with('user',$currentUser)->with('product',$product)->with('page','editProductPage');
        }else{
            return $this->getAdminLoginPage();
        }

    }

    public function addProduct(Request $request){
        $productName = $request->input('productName');
        $productImage = $request->input('productImage');
        $productPrice = $request->input('productPrice');
        $productCategory = $request->input('category');
        $productAvailability = $request->input('productAvailability');
        $productDescription = $request->input('productDescription');


        $request -> validate([
            'productName' => ['required'],
            'productImage' => ['required'],
            'productPrice' => ['required'],
            //'productAvailability' => ['required'],
            'productDescription' => ['required']
        ]);
        $availability = false;
        if($productAvailability == 'Available'){
            $availability = true;
        }

        Product::create([
            'name' => $productName,
            'price' => $productPrice,
            'category'=>$productCategory,
            'description' => $productDescription,
            'image' => $productImage,
            'availability' => $availability,
        ]);

        return redirect('adminPanel');

    }

    public function editProduct(Request $request){
        $productID = $request->input('productID');
        $productName = $request->input('productName');
        $productImage = $request->input('productImage');
        $productCategory = $request->input('category');
        $productPrice = $request->input('productPrice');
        $productAvailability = $request->input('productAvailability');
        $productDescription = $request->input('productDescription');

         $request -> validate([
            'productName' => ['required'],
            'productImage' => ['required'],
            'productPrice' => ['required'],
             'category' => ['required'],
            //'productAvailability' => ['required'],
            'productDescription' => ['required'],
            'productID' => ['required']
        ]);




        $availability = false;
        if($productAvailability == 'Available'){
            $availability = true;
        }
        $product = Product::find($productID);
        $product->name = $productName;
        $product->image = $productImage;
        $product->price = $productPrice;
        $product->category=$productCategory;
        $product->availability = $availability;
        $product->description = $productDescription;
        $product->save();

        return redirect('adminPanel');




    }

    public function deleteProduct($id){
        if($this->checkPermissions()) {
            $product = Product::find($id);
            $product->delete();
            return redirect('adminPanel');
        }else{
            return $this->getAdminLoginPage();
        }
    }




}
