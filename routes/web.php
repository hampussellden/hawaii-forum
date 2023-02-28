<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ThreadsPageController;
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
Route::post('login', LoginController::class);


//Logout
Route::get('logout', LogoutController::class);

//Views
Route::get('home', HomePageController::class)->middleware('auth');
Route::get('/login')->middleware('guest');
Route::get('/forum/{category}', ThreadsPageController::class)->middleware('auth');
