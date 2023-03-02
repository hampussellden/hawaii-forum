<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ThreadsPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ThreadController;


// //Primary view
Route::view('/', 'index')->name('login')->middleware('guest');
Route::redirect('home', 'categories')->middleware('auth');
Route::redirect('login', 'categories')->middleware('auth');
Route::redirect('register', 'categories')->middleware('auth');


// //Register view
Route::view('register', 'register')->middleware('guest');
Route::post('register-user', RegisterUserController::class);

// //Login
Route::post('login', LoginController::class);

// //Logout
Route::get('logout', LogoutController::class);

// //Views

// //Routes


//Resource controllers
Route::resource('/posts', PostsController::class)->middleware('auth');
Route::resource('/threads', ThreadController::class)->middleware('auth');
Route::resource('/categories', CategoryController::class)->middleware('auth');
// Route::resource('categories.threads', ThreadController::class)->middleware('auth');
