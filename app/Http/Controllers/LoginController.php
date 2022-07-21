<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return redirect('/');
    }
    public function login_process(Request $request){
        if(Auth::attempt($request->only('email','password') )){
            return redirect('/admin');
        }else{
            return redirect('/');
        }
    }

    public function register(){
        return view('register');
    }
    public function registeruser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
