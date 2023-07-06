<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BebasMasalahController;

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

// Landing
Route::get('/', function () {
    return view('landing');
});

// Dashboard
Route::get('/dashboard', [UserController::class, 'getHome'])->name('home');
// Route::get('/dashboard',function(){
    // dd(Auth::check());
    // dd(Auth::user());
    // dd(auth()->user());
//    return view('welcome');
// });
Route::get('/dashboard/bebas-masalah', [BebasMasalahController::class, 'getBebasMasalah'])->name('home');
Route::get('/dashboard/user', [UserController::class, 'getUser'])->name('user');
Route::get('/dashboard/profile', [UserController::class, 'getProfile'])->name('profile');

// Auth
Route::get('/login', [AuthController::class, 'getLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
