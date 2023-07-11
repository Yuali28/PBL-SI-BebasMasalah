
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
})->name('landing');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [UserController::class, 'getHome'])->name('dashboard.home');
    Route::post('/logout', [AuthController::class, 'postLogout'])->name('logout');

    Route::get('/dashboard/bebas-masalah', [BebasMasalahController::class, 'getBebasMasalah'])->name('dashboard.bebas-masalah');
    Route::put('/dashboard/bebas-masalah/pengajuan', [BebasMasalahController::class, 'putPengajuan'])->name('dashboard.bebas-masalah.pengajuan');
    Route::put('/dashboard/bebas-masalah/persetujuan', [BebasMasalahController::class, 'putPersetujuan'])->name('dashboard.bebas-masalah.persetujuan');

    Route::get('/dashboard/user', [UserController::class, 'getUser'])->name('dashboard.user');
    Route::post('/dashboard/user/create', [UserController::class, 'postUser'])->name('dashboard.user.create');
    Route::delete('/dashboard/user/{user:id}/delete', [UserController::class, 'deleteUser'])->name('dashboard.user.delete');

    Route::get('/dashboard/profile', [UserController::class, 'getProfile'])->name('dashboard.profile');
    Route::put('/dashboard/profile/put', [UserController::class, 'putProfile'])->name('dashboard.profile.put');
});

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('login.store');
});

