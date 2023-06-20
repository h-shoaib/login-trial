<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;

use app\Http\Controllers\formHandle;


Route::get('/main', function () {
    return view('main');
});

Route::get('/hello',function(){
    return view('hello');
});

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');

Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);
