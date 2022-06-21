<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return View('login-error');
    }

    public function register(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');


        return User::create([
            'email' => $email,
            'password' => $password,
            'userType' => 'Customer',
            'name' => $name
        ]);
        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }

    public function getLoginPage(){
        return View('login');
    }

    public function getRegisterPage(){
        return View('register');
    }
}
