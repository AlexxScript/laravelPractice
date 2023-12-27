<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('form');
});

Route::get('/register',[SignUpController::class,'show']);
Route::post('/register',[SignUpController::class,'createUser']);

Route::get('/login',[LoginController::class,'show']);
Route::post('/login',[LoginController::class,'loginUser']);
Route::get('/logout',[LoginController::class,'logoutUser']);
