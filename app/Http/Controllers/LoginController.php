<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show()
    {
        return view('user.login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logoutUser(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
