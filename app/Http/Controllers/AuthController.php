<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login ()
    {
        return view ('pages.Auth.Login');
    }

    // public function index2 ()
    // {
    //     dd('berhasil login !!');
    // }

    public function authenticate (Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request -> session()->regenerate();

            return redirect()->intended('/ds');
        }

        return back()->withErrors([
            'email' => 'Login Wrong !!'
        ])->onlyInput('email');

        // Session::flash('status', 'failed');
        // Session::flash('message', 'Login Wrong !!');

        // return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request -> session()-> invalidate();
        $request -> session()-> regenerate();

        return redirect('/login');
    }
}
