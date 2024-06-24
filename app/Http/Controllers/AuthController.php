<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showAuthForm(Request $request) {
        return view('auth.auth');
    }
    public function loginUser(Request $request)
    {
    if ($request->method() === 'POST') {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('listAllUsers');
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ])->withInput();
    }

    return $this->showAuthForm($request);
    }
   
    public function logoutUser(Request $request) 
    {
        Auth::logout();
        return redirect()->route('auth')->with('sucess', 'Logout realizado com sucesso'); 
        
    }
}


