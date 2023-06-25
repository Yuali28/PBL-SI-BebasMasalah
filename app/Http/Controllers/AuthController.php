<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        return back()->with('loginError', 'Login gagal!');
    }

    public function getRegister()
    {
        if(auth()->user()->role !== 2) {
            return redirect('/dashboard');
        }
        return view('auth.register');
    }

    public function postUser(Request $request)
    {
        if(auth()->user()->role !== 'Superuser') {
            return redirect('/');
        }
        $userData = $request->validate([
            'username' => 'required|unique:users|min:3',
            'password' => 'required|min:3',
            'role' => 'required',
        ]);
        $mahasiswaData = $request->validate([

        ]);
        $pegawaiData = $request->validate([

        ]);


        // dd($validatedData);
        User::create($userData);
        Mahasiswa::create($mahasiswaData);
        Pegawai::create($pegawaiData);

        return redirect('/register')->with('success', 'Registrasi berhasil!');
    }


}