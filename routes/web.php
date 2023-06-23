<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;

use app\Http\Controllers\formHandle;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ForgotPWController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

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

Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::get('/resetpw',function(Request $request){
    $email = "test";
    if ($request->has('email')) {
    $email = Crypt::decryptString($request->input('email'));
    return view('reset_password',['email'=>$email]);
    }
    else{
    return view('reset_password',['email'=>$email]);
    }
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

Route::get('/send-email',[EmailController::class,'sendWelcomeEmail']);

Route::get('/verification',[VerificationController::class,'verify']);

Route::post('/forgotpw',[ForgotPWController::class,'requestReset']);
Route::post('/forgot',[ForgotPWController::class,'forgot']);

