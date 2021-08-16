<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Str;

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

    public function registrasi(){
        return view('login.registrasi');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());
        // return view('login.registrasi');
        // User::truncate();
        User::create([
            'name'=>$request->name,
            'level'=>'karyawan',
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
            'remember_token'=> Str::random(60),
        ]);
        return view('login.login');

    }
}
