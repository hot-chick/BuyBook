<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\MainController;

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
Route::get('/logout', [UserController::class, "logout"]);

Route::post('/signup_valid', [UserController::class, "signup_valid"]);
Route::post('/signin_valid', [UserController::class, "signin_valid"]);

Route::get('/catalog', [MainController::class, "catalog"]);
Route::get('book/{book}', [MainController::class, "bookPage"]);
Route::get('/trash', [MainController::class, "trash"]);

Route::post('/cart/add', [MainController::class, "addItem"])->name('cart.add');

