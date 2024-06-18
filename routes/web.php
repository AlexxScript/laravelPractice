<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
});

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');

// Route::get('/register', [SignUpController::class, 'show']);
// Route::post('/register', [SignUpController::class, 'createUser']);

// Route::get('/login', [LoginController::class, 'show'])->name('login');
// Route::post('/login', [LoginController::class, 'loginUser']);
// Route::get('/logout', [LoginController::class, 'logoutUser']);

// // Route::get('/dashboard', function () {
// //     // $idBlog = Auth::user()->id;
// //     // return User::find($idBlog)->content;
// //     return view('dashboard.listContent');
// // })->middleware('auth');

// Route::get('/dashboard',[ContentController::class,'showTasks'])->middleware('auth');
// // Route::get('/testapi',[ContentController::class,'controllerApi']);
// Route::get('/dashboard/create',function () {
//     return view('dashboard.create');
// })->middleware('auth');

// Route::get('/dashboard/profile',function () {
//     return view('dashboard.profile');
// })->middleware('auth');

// Route::post('/dashboard/create',[ContentController::class,'createContent'])->middleware('auth');