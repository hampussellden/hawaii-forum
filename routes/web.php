<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ThreadsPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SingleThreadController;
use App\Http\Controllers\ThreadController;

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

// //Primary view
Route::view('/', 'index')->name('login')->middleware('guest');

// //Register view
Route::view('/register', 'register');
Route::post('register-user', RegisterUserController::class);

// //Login
Route::post('login', LoginController::class);


// //Logout
Route::get('logout', LogoutController::class);

// //Views
// Route::get('/login')->middleware('guest');
// Route::get('/forum/{category}', ThreadsPageController::class)->middleware('auth');
// Route::get('/forum/{category}/{thread}', SingleThreadController::class)->middleware('auth');

//new Routes


//Resource controllers
Route::resource('/categories/{category}/threads/{thread}', ThreadController::class)->middleware('auth');
Route::resource('/categories', CategoryController::class)->middleware('auth');
Route::resource('categories.threads', ThreadController::class)->middleware('auth');
