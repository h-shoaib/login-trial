<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signup(Request $request){
        echo "hello";
        print_r($request->all());
        $userDetails = new UserDetails;

        $userDetails->first_name = $request['first_name'];
        $userDetails->last_name = $request['last_name'];
        $userDetails->email = $request['email'];

        if(!is_null($request['company_name'])){
            $userDetails->company_name = $request['company_name'];
        }
        //encrypted password
        $password = $request['password'];
        $hashedPassword = Hash::make($password);
        $userDetails->password = $hashedPassword;        

        $userDetails->save();

    }
}
