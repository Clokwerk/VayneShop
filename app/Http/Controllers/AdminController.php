<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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


        if($user->email == $email && $user->password == $password && $user->userType == 'Administrator'){
            Auth::login($user);


            return redirect()->intended();
        }


        return View('login-error');
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
            return View('adminPanel');
        }else{
            return $this->getAdminLoginPage();
        }
    }

    public function getAdminLoginPage(){
        return View('adminLogin');
    }



}
