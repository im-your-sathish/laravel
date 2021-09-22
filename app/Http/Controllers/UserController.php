<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{

    public function index()
    {
        return view('users', 
             ['users' => User::all(), 'name' => session()->get("user")->name]
        );
    }

    public function store(Request $request)
    {
       
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->mobile = $request->mobile;
        $user->role = 0;
        $res = $user->save();
        if ($res) {
            return redirect('login')->with('msg', 'Register success Please Login again..');
        } else {
            return redirect('register')->with('msg', 'Unable to Register..');
        }
    }

    public function logincheck(Request $request)
    {
        
        $result =  User::where(['email' => $request->email, 'password' => $request->password])->first();
       
        if ($result) {
            if ($result->role == 1) {

                session(['user' => $result]);
                return redirect('/users')-> with('status', 'Login Success');;
            } else {
                session(['user' => $result]);
                return redirect('/books');
            }
           
        } else {
            return redirect('login')->with(['msg' => 'Invalid Email or Password', 'color' => 'danger']);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("login")->with('msg', 'You\'re logged out..');
    }
}
