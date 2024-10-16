<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('authorize.login');
    }

    public function authenticate()
    {
        $validate = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validate)) {

            return redirect('/')->with('success', 'Authentication successful');
        }

        return redirect('/login')->with('error', 'Authentication failed');
    }   

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'logout successful');
    }
}
