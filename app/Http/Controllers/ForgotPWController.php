<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPWMail;

class ForgotPWController extends Controller
{
    public function requestReset(Request $request){
        $email_data = $request['registered_email'];
        $hashed_email_data = Crypt::encryptString($email_data);
        Mail::to("nahmansaxena@gmail.com")->send(new ForgotPWMail($hashed_email_data));
        return redirect('/main');
    }
    
    public function forgot(Request $request){
            $email=$request['email'];
            $user = UserDetails::where('email',$email)->first();
            $password = Crypt::encryptString($request['password']);
            $user->password = $password;
            $user->save();
            print_r("Success");
    }
}
