<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;

use app\Http\Controllers\formHandle;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/main', function () {
    return view('main');
});

Route::get('/hello',function(){
    return view('hello');
});

Route::get('/tnc',function(){
    return view('tnc');
});

Route::get('/signup',function(){
    return view('create_account');
});

Route::get('/forgotpw',function(){
    return view('forgot_password');
});

Route::post('login',[LoginController::class,'login']);
Route::post('signup',[SignupController::class,'signup']);

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');

Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);

Route::get('get-session',function(){
    $session = session()->all();
    echo "<pre>";
    print_r($session);
});

Route::get('destroy-session',function(){
    session()->forget('user_id');
    session()->forget('name');
    return redirect('/main');
});