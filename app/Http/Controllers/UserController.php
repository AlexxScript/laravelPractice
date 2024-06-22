<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show (string $id): View{
        //we must adjust for vuejs
        return view('user.profile',["id" => $id]);
    }
}
