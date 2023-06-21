<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Logins;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){

        $email_val = $request['email'];
        $password_val = $request['password'];

        if(UserDetails::where('email',$email_val)->exists()){
            $user = UserDetails::where('email', $request['email'])->first();
            $stored_password = $user->password;
    
            if (Hash::check($password_val, $stored_password)) {
                print_r ("success");
                $logins = new Logins;
                $logins->email = $request['email'];
                $logins->save();
                $request->session()->put('user_id',$user->user_id);
                $request->session()->put('name',$user->first_name);
                print_r(session()->all()); 
            } 
            else {
            print_r ("fail");
            }
        }
        else {
            print_r("fail");
        }
    }
}
