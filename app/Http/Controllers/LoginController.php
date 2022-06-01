<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        // return User::where('email', $email)->first();
        $check_auth=User::where('email', $email)->
        where('password', $password)->first();
        if($check_auth){
            $user_id= $check_auth->id;
            $user_name= $check_auth->name;
            $user_email= $check_auth->email;
            session(['user_id' => $user_id]);
            session(['user_name' => $user_name]);
            session(['user_email' => $user_email]);
            session(['user_login_status' => "Login"]);
            return  redirect('/');
        }else{
         
            
            return redirect('/login');
        }
        

    }
}
