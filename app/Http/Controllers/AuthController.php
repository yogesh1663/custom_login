<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return view('welcome');
        } else {
            return redirect()->route('view.login')->with('error', 'Please login to see home page.');
        }
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('components.back.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect()->route('create.login')->with('error', 'Invalid email or password');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('components.back.registration');
    }

    public function createRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        $sql = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if (!$sql) {
            echo ("something went wrong");

            return redirect()->route('create.register')->with('error', 'something went wrong');
        }
        return redirect()->route('view.login')->with('success', 'Successfully Registered, Please login to continue.');
    }

    public function logout()
    {

        session()->flush();
        Auth::logout();
        return redirect()->route('view.login');
    }
}
