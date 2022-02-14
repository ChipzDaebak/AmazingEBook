<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if($request->remember){
            Cookie::queue('email', $credentials['email'], 1);
        }

        if(Auth::attempt($credentials, true)){
            Session::put('session', 'ABC');
            return redirect('/home');
        }

        return redirect()->back()->withErrors('Wrong Credential');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
