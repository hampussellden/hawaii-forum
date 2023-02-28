<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;

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

//Primary view
Route::view('/', 'index')->name('login')->middleware('guest');


//Register view
Route::view('/register', 'register');
Route::post('register-user', RegisterUserController::class);

//Login
Route::view('/home', 'home')->middleware('auth');
Route::post('login', LoginController::class);

//Logout
Route::get('logout', LogoutController::class);
