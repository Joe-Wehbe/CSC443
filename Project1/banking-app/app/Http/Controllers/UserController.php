<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function displayRegisterPage(){
        return view('register');
    }

    public function register(Request $request){

        $data = $request -> validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password'
        ]);

        return view('accounts');
    }
}
