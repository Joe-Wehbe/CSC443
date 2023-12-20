<?php

use App\Models\User;
use App\Models\Account;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;

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

//          **************** User Controller ****************
Route::post('/register', [UserController::class, 'register']);
Route::post('/accounts', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get("/user-accounts/{userId}", [UserController::class, 'getUserAccounts']);


//          **************** Account Controller ****************
Route::post('/create-account', [AccountController::class, 'createAccount']);
Route::post('/update-account-status', [AccountController::class, 'updateAccountStatus']);
Route::get("/account-details/{accountId}", [AccountController::class, 'getAccountDetails']);


//          **************** Transaction Controller ****************
Route::post('/deposit', [TransactionController::class, 'deposit']);
Route::post('/withdraw', [TransactionController::class, 'withdraw']);
Route::post('/transfer-to', [TransactionController::class, 'transferTo']);
Route::post('/transfer-from', [TransactionController::class, 'transferFrom']);


//          **************** Navigation Routes ****************
Route::get("/register", function () {return view('register');});
Route::get("/login", function () {return view('login');});
Route::get("/create-account", function () {return view('create-account');});

Route::get("/accounts", function () {
    if(auth()->check()){$accounts = auth()->user()->userAccounts()->latest()->get();}
    return view('accounts', ['accounts' => $accounts]);
});

Route::get("/pending", function () {
    if(auth()->check()){$accounts = auth()->user()->userAccounts()->latest()->get();}
    return view('pending', ['accounts' => $accounts]);
});

Route::get("/users", function () {
    if(auth()->check()){$users = User::all();}
    return view('users', ['users' => $users]);
});

Route::get("/user-requests", function () {
    if(auth()->check()){$accounts = Account::all(); $users = User::All();}
    return view('user-requests', ['accounts' => $accounts, 'users' => $users]);
});

Route::get("/user-account-details", function () {return view('user-account-details');});



