<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->role = Auth::user();
        // $this->profile = Auth::user()->
    }

    public function getHome()
    {
        // $role = $this->role;
        // dd($role);
        return view('dashboard.home.switcher', [
            'user' => Auth::user()->mahasiswa
        ]);
    }

    public function getUser(User $user)
    {
        return view('dashboard.user', [
            // 'user' => $user->where('id', auth()->user()->id)->first()
        ]);
    }

    public function getProfile(User $user)
    {
        return view('dashboard.profile.switcher', [
            // 'user' => $user->where('id', auth()->user()->id)->first()
        ]);
    }
}
