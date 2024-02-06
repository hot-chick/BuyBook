<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, "index"]);

Route::get('/reg', [UserController::class, "signup"]);
Route::get('/auth', [UserController::class, "signin"]);

Route::post('/signup_valid', [UserController::class, "signup_valid"]);
Route::post('/signin_valid', [UserController::class, "signin_valid"]);
