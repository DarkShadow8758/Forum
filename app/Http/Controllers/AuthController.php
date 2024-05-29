<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // camelCase
    public function login()
    {
        //Lógica
        return view('auth.login');
    }
    public function logout() 
    {
        return view('auth.logout');
    }
}
