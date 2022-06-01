<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class SignupController extends Controller
{
    public function index() {
        return view('signup');
    }
    public function signup(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $check_auth=User::where('email', $email)->first();
        if($check_auth){
            return  redirect('/signup',['error'=>'already_user_exist']);
        }else{
          $user = new User;
          $user->name = $name;
          $user->email = $email;
          $user->password = $password;
          $user->save();
            return redirect('/login');
        }
        

    }
}
