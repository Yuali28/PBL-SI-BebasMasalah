<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function getHome(User $user)
    {
        return view('dashboard.home.switcher', [
            // 'user' => $user->where('id', auth()->user()->id)->first()
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
