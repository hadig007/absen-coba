<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if(auth()->attempt($request->only('email','password')))
        {
            return redirect('home');
        }
        return redirect('/')->with('gagal','anda gagal login');
    }

    public function logout(){
        auth()->logout();
        return redirect('login');
    }
}
