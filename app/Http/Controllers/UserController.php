<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
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
        $request->validate([

            'email'=>'required',

            'password'=>'required'
        ]);

        $user=User::where('email',$request->email)->first();
        
        if (!$user || !Hash::check($request->password,$user->password)) {
        
            return back()->with('failed','invalid email or password entered');
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
            
            return back()->with('success','you have successfully registered');
        }
        else{

            return back()->with('fail','failed to registered');


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
