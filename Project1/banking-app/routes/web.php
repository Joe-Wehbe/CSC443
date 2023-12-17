<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// User Controller
Route::post('/register', [UserController::class, 'register']);
Route::post('/accounts', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

// Account Controller
Route::post('/pending', [AccountController::class, 'createAccount']);

// Navigation Routes
Route::get("/register", function () {return view('register');});
Route::get("/login", function () {return view('login');});
Route::get("/accounts", function () {return view('accounts');});
Route::get("/pending", function () {return view('pending');});
Route::get("/create-account", function () {return view('create-account');});
Route::get("/account-details", function () {return view('account-details');});
Route::get("/users", function () {return view('users');});
Route::get("/user-requests", function () {return view('user-requests');});
Route::get("/user-accounts", function () {return view('user-accounts');});
Route::get("/user-account-details", function () {return view('user-account-details');});