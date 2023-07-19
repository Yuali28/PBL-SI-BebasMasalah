
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
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
    Route::get('/dashboard', [DashboardController::class, 'getHome'])->name('dashboard.home');
    Route::post('/logout', [AuthController::class, 'postLogout'])->name('logout');

    Route::get('/dashboard/bebas-masalah', [BebasMasalahController::class, 'getBebasMasalah'])->name('dashboard.bebas-masalah');
    Route::put('/dashboard/bebas-masalah/pengajuan', [BebasMasalahController::class, 'putPengajuan'])->name('dashboard.bebas-masalah.pengajuan');
    Route::put('/dashboard/bebas-masalah/persetujuan', [BebasMasalahController::class, 'putPersetujuan'])->name('dashboard.bebas-masalah.persetujuan');
    Route::put('/dashboard/bebas-masalah/{bebasMasalah:id}/catatan', [BebasMasalahController::class, 'putCatatan'])->name('dashboard.bebas-masalah.catatan');

    Route::get('/dashboard/profile', [UserController::class, 'getProfile'])->name('dashboard.profile');
    Route::put('/dashboard/profile/put', [UserController::class, 'putProfile'])->name('dashboard.profile.put');
});

Route::group(['middleware' => 'apd'], function() {
    Route::get('/dashboard/user/mahasiswa', [MahasiswaController::class, 'getMahasiswa'])->name('dashboard.user.mahasiswa');
    Route::post('/dashboard/user/mahasiswa/store', [MahasiswaController::class, 'storeMahasiswa'])->name('dashboard.user.mahasiswa.store');
    Route::put('/dashboard/user/mahasiswa/{user:id}/edit/put', [MahasiswaController::class, 'putMahasiswa'])->name('dashboard.user.mahasiswa.put');
    Route::delete('/dashboard/user/mahasiswa/{user:id}/delete', [MahasiswaController::class, 'deleteMahasiswa'])->name('dashboard.user.mahasiswa.delete');

    Route::get('/dashboard/user/pegawai', [PegawaiController::class, 'getPegawai'])->name('dashboard.user.pegawai');
    Route::post('/dashboard/user/pegawai/store', [PegawaiController::class, 'storePegawai'])->name('dashboard.user.pegawai.store');
    Route::put('/dashboard/user/pegawai/{user:id}/edit/put', [PegawaiController::class, 'putPegawai'])->name('dashboard.user.pegawai.put');
    Route::delete('/dashboard/user/pegawai/{user:id}/delete', [PegawaiController::class, 'deletePegawai'])->name('dashboard.user.pegawai.delete');

    Route::get('/dashboard/berita', [BeritaController::class, 'getBerita'])->name('dashboard.berita');
    Route::get('/dashboard/berita/create', [BeritaController::class, 'create'])->name('dashboard.berita.create');
    Route::post('/dashboard/berita', [BeritaController::class, 'store'])->name('dashboard.berita.store');
    Route::get('/dashboard/berita/{berita:id}/edit', [BeritaController::class, 'putBerita'])->name('dashboard.berita.put');
    Route::put('/dashboard/berita/{berita:id}/delete', [BeritaController::class, 'deleteBerita'])->name('dashboard.berita.delete');
});

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('login.store');
});

