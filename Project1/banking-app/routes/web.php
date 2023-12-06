<?php

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

Route::get('/', function () {
    return view('register');
});

Route::get("/login", function () {
    return view('login');
});

Route::get("/accounts", function () {
    return view('accounts');
});

Route::get("/pending", function () {
    return view('pending');
});

Route::get("/create-account", function () {
    return view('create-account');
});

Route::get("/account-details", function () {
    return view('account-details');
});

Route::get("/users", function () {
    return view('users');
});

Route::get("/requests", function () {
    return view('requests');
});

Route::get("/user-accounts", function () {
    return view('user-accounts');
});