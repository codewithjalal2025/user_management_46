<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){

        $validated=$request->validate([
            'first_name'=>'required|min:3|max:25',
            'last_name'=>'required|min:3|max:25',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:16',
            'phone' =>'required|digits:10',

        ]);

        if ($request->file('image')) {
            $image=$request->file('image');
            $img_name=rand(100000,999999).time().$image->getClientOriginalName();
            $image->move('image',$img_name);
            $img_name='image/'.$img_name;


        }

        $user=new User();
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->phone=$request->phone;
        $user->gender=$request->gender;
        $user->hobby=($request->hobby) ? implode(',',$request->hobby):null;
        $user->city_id=$request->city_id;
        $user->image=isset($img_name)?$img_name:null;
        $user->save();

        return redirect('/')->with('success','User Successfully Register');





    }
}
