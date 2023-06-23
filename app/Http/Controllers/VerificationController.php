<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Crypt;

class VerificationController extends Controller
{
    public function verify(Request $request){
        if ($request->has('id')) {
            $hashed_id = Crypt::decryptString($request->input('id'));
            $user = UserDetails::where('user_id',$hashed_id)->first();
            $user->verification_status = true;
            $user->save();
            print_r($user->all());
         }
    }
}
