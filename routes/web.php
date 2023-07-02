
<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.home');
});

Route::get('/bebasmasalah/mahasiswa', function () {
    return view('bebasmasalah.mahasiswa');
});

Route::get('/bebasmasalah/kajur', function () {
    return view('bebasmasalah.kajur');
});

Route::get('/bebasmasalah/prodi', function () {
    return view('bebasmasalah.prodi');
});

Route::get('/bebasmasalah/ta', function () {
    return view('bebasmasalah.ta');
});

Route::get('/bebasmasalah/keuangan', function () {
    return view('bebasmasalah.keuangan');
});