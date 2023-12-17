<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){

        $data = $request -> validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password'
        ]);

        $data['is_admin'] = false;
        $data['password'] = bcrypt( $data['password']);

        auth()->login(User::create($data));
        return redirect('/login');
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
