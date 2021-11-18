<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login()
    {
        $credentials = $request->validate([
            'txtEmail' => ['required', 'email'],
            'txtPass' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'txtEmail' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {

    }
}
