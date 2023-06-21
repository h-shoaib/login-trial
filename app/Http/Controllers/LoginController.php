<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetails;

class LoginController extends Controller
{
    public function login(Request $request){
        $email_val = $request['email'];
        $password_val = $request['password'];

        if (UserDetails::where('email', $email_val)->exists() && UserDetails::where('password', $password_val)->exists()) {
            print_r ("success");
        } else {
            print_r ("fail");
        }
    }
}
