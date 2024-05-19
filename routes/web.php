<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\RegisterController;

// Route::get('/', function () {
//     return view('frontend.index');
// });



Route::get('/', [IndexController::class, 'index']);
Route::get('index', [IndexController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);