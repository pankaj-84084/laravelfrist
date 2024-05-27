<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\RegisterController;
use App\Http\Controllers\backend\MaxMemberController;


// Route::get('/', function () {
//     return view('frontend.index');
// });



Route::get('/', [IndexController::class, 'index']);
Route::get('index', [IndexController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);
Route::get('members', [MaxMemberController::class, 'index']);

Route::post('registration-process',[MaxMemberController::class,'register']);
Route::post('login-process',[MaxMemberController::class,'login']);