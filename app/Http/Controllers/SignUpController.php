<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function show()
    {
        return view('user.register');
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email',
            'name' => 'required|min:6|unique:users,name',
            'password' => 'required|min:8',
            'repeate_password' => 'required|same:password'
        ]);
        $user = new User();
        $user->email = $request->input("email");
        $user->name = $request->input("name");
        $user->password = Hash::make($request->input("repeate_password"));
        $user->save();
        //adjust for vuejs 
        return view('user.login');
    }
}
