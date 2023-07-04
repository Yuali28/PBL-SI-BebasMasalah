<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah!',
        ])->onlyInput('username');

        return back()->with('loginError', 'Login gagal!');
    }

    // public function getRegister()
    // {
    //     if(auth()->user()->role !== 2) {
    //         return redirect('/dashboard');
    //     }
    //     return view('auth.register');
    // }

    // public function postMahasiswa(Request $request){}
    // public function postPegawai(Request $request){}

    // public function postUser(Request $request)
    // {
    //     if(auth()->user()->role !== 'Superuser') {
    //         return redirect('/');
    //     }
    //     $userData = $request->validate([
    //         'username' => 'required|unique:users|min:3',
    //         'password' => 'required|min:3',
    //         'role' => 'required',
    //     ]);
    //     $mahasiswaData = $request->validate([

    //     ]);
    //     $pegawaiData = $request->validate([

    //     ]);


    //     // dd($validatedData);
    //     User::create($userData);
    //     Mahasiswa::create($mahasiswaData);
    //     Pegawai::create($pegawaiData);

    //     return redirect('/register')->with('success', 'Registrasi berhasil!');
    // }


}
