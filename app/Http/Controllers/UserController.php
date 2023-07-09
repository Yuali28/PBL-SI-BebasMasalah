<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $role;
    protected $profile;
    protected $bebasMasalah;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $user = Auth::user();
            $this->role = $user->role;

            if($this->role > 0) {
                $this->profile = [$user->mahasiswa];
            } else {
                $this->profile = [$user->mahasiswa, $user->bebasMasalah];
                // $this->bebasMasalah = $user->bebasMasalah;
            }
            return $next($request);
        });
    }

    public function getHome()
    {
        return view('dashboard.home.switcher', [
            'role' => $this->role,
            'profile' => $this->profile
        ]);

        return view('dashboard.home.switcher', [
            'role' => $this->role,
            'profile' => $this->profile
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
