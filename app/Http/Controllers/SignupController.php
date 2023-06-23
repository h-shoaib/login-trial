<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class SignupController extends Controller
{
    public function signup(Request $request){
        $user = new UserDetails;

        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];

        if(!is_null($request['company_name'])){
            $user->company_name = $request['company_name'];
        }
        //encrypted password
        $password = $request['password'];
        $hashedPassword = Hash::make($password);
        $user->password = $hashedPassword;        
        $user->save();

        $email_data = $user->user_id;
        $hashed_email_data = Crypt::encryptString($email_data);
        Mail::to("haroonshoaib32@gmail.com")->send(new WelcomeEmail($hashed_email_data));
        
        return redirect('/')->with('alert', 'Verification email sent!');

    }
}
