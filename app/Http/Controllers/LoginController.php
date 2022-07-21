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
        if(Auth::attempt($request->only('ic','password') )){
            return redirect('/admin');
        }else{
            return redirect('/');
        }
    }

    public function register(){
        return view('register');
    }
    public function registeruser(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'ic' => $request->ic,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'jawatan' => $request->jawatan,
            'kementerian' => $request->kementerian,
            'status' => 'Aktif',
            'password' => bcrypt($request->password),
            'role' => '2',
            'remember_token' => Str::random(60),
        ]);
        return redirect('/');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
