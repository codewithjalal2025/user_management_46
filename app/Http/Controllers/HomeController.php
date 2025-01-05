<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $user=DB::table('users')
        ->join('cities','cities.id','users.city_id')
        ->where('users.id',Auth::id())
        ->select('users.*','cities.name as city_name')
        ->first();
        if (!$user) {
            return redirect('/');
        }

        return view('home',compact('user'));
    }
}
