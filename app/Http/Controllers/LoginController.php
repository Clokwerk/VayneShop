<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
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
            return redirect('/loginPage?error=Invalid username or password!!!');
        }


        if($user->email == $email && $user->password == $password && $user->userType == 'Customer'){
            Auth::login($user);


            return redirect("");
        }




    }

    public function logout(Request $request){
        if(!Auth::guest()){
            session()->remove('basket');
            Auth::logout();
        }
        return redirect('/');
    }

    public function register(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');

       /*$user= DB::table('users')
            ->where('email',$email )
            ->get();*/

       /*if($user!=null)
       {
           return redirect('/registerPage?error=This email already exist!!!');
       }*/

        User::create([
            'email' => $email,
            'password' => $password,
            'userType' => 'Customer',
            'name' => $name
        ]);
        return redirect('/loginPage')->with('success', "Account successfully registered.");
    }



    public function getLoginPage(Request $request){
        $error=$request->query('error');
        return View('mpage')->with('page','login')->with('error',$error);
    }

    public function getRegisterPage(Request $request){
        $error=$request->query('error');
        return View('mpage')->with('page','register')->with('error',$error);
    }
}
