<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function viewLogin()
    {
        
        return view('Login');

    }

    public function viewRegister()
    {
        return view('Register');
    }
    public function checkAuth(Request $request)
    {
        $user=User::where('email',$request->email)->first();
        
        if (!$user || !Hash::check($request->password,$user->password)) {
        
            return back();
        }
        else{

            $request->session()->put('user',$user);
            return redirect('/');
        }
    }
    public function storeUser(Request $request)
    {
        
        $request->validate([

            'name'=>'required',

            'email'=>'required',

            'password'=>'required',
        ]);

        $user= new User;

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $result=$user->save();

        if ($result) {
            
            return"registered successfully";
        }



    }

    public function logOut()
    {
        if (session()->has('user')) {
            
            session()->pull('user');

            return redirect('/');
        }
    }
}
