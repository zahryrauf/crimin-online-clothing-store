<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}