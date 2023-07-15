
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BebasMasalahController;
use App\Http\Controllers\BeritaController;

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
    Route::put('/dashboard/bebas-masalah/{bebasMasalah:id}/catatan', [BebasMasalahController::class, 'putCatatan'])->name('dashboard.bebas-masalah.catatan');

    Route::get('/dashboard/user', [UserController::class, 'getUser'])->name('dashboard.user');
    Route::get('/dashboard/user/create', [UserController::class, 'createUser'])->name('dashboard.user.create');
    Route::get('/dashboard/user/{user:id}/edit', [UserController::class, 'editUser'])->name('dashboard.user.edit');
    Route::post('/dashboard/user/create/store', [UserController::class, 'postUser'])->name('dashboard.user.store');
    Route::put('/dashboard/user/{user:id}/edit/put', [UserController::class, 'putUser'])->name('dashboard.user.put');
    Route::delete('/dashboard/user/{user:id}/delete', [UserController::class, 'deleteUser'])->name('dashboard.user.delete');

    Route::get('/dashboard/berita', [BeritaController::class, 'getBerita'])->name('dashboard.berita.view');
    Route::get('/dashboard/berita/create', [BeritaController::class, 'create'])->name('dashboard.berita.create');
    Route::post('/dashboard/berita', [BeritaController::class, 'store'])->name('dashboard.berita.store');
    Route::get('/dashboard/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('dashboard.berita.edit');
    Route::put('/dashboard/berita/{berita}', [BeritaController::class, 'update'])->name('dashboard.berita.update');
    Route::delete('/dashboard/berita/{berita}', [BeritaController::class, 'destroy'])->name('dashboard.berita.delete');

    Route::get('/dashboard/profile', [UserController::class, 'getProfile'])->name('dashboard.profile');
    Route::put('/dashboard/profile/put', [UserController::class, 'putProfile'])->name('dashboard.profile.put');
});

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('login.store');
});

