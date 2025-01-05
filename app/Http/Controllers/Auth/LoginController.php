<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials =$request->validate([
            'email' =>['required','email'],
            'password'=>['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('home')->with('success','User Successfully Login');

        }
        return back()->withErrors([
            'email'=>'credentials is not match',
            'password'=>'Password is not match'

        ])->onlyInput('email','password');

    }

    public  function logout(){
        Auth::logout();
        return redirect('/')->with('success','User Successfully Logouted');
    }
}
