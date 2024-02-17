<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('components.back.login');
    }

    public function createLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('welcome'));
        }
        return redirect()->route('create.login')->with('error', 'Invalid email or password');
    }

    public function register()
    {
        return view('components.back.registration');
    }
}
