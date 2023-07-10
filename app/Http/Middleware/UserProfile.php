<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            // if (Auth::user()->role > 0) {
            //     $userWithProfiles = User::with('pegawai')->find($user->fk_pegawai);
            //     $request->merge(['userWithProfiles' => $userWithProfiles]);
            // } else {
            //     $userWithProfiles = User::with('mahasiswa')->find($user->fk_mahasiswa);
            //     $request->merge(['userWithProfiles' => $userWithProfiles]);
            // }

            if ($user->role > 0) {
                $profile = $user->staff;
            } else {
                $profile = $user->student;
            }

            $request->merge(['userProfile' => $profile]);
        }

        return $next($request);
    }
}
