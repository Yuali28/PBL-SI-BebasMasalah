<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\Mahasiswa;
use App\Models\BebasMasalah;
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
        switch ($this->role) {
            case 1:                                       // Ketua Jurusan
                $jurusan = auth()->user()->pegawai->fk_jurusan;

                $bm0 = Mahasiswa::whereHas('bebasMasalah', function ($query) {
                        $query->where(function ($subQuery) {
                                $subQuery->where('status_ta', '!=', 1)
                                    ->orWhere('status_keuangan', '!=', 1)
                                    ->orWhere('status_perpus', '!=', 1);
                            });
                    })
                    ->whereHas('prodi.jurusan', function ($query) use ($jurusan) {
                        $query->where('fk_jurusan', $jurusan);
                    })
                    ->count();

                $bm1 = Mahasiswa::whereHas('bebasMasalah', function ($query) {
                        $query->where('status_ta', 1)
                            ->where('status_keuangan', 1)
                            ->where('status_perpus', 1);
                    })
                    ->whereHas('prodi.jurusan', function ($query) use ($jurusan) {
                        $query->where('fk_jurusan', $jurusan);
                    })
                    ->count();

                $mahasiswa = Mahasiswa::whereHas('prodi.jurusan', function ($query) use ($jurusan) {
                    $query->where('fk_jurusan', $jurusan);
                })->count();

                $bebasMasalah = [$bm0, $bm1];
                $pegawai = [];
                $user = [];
                break;
            case 2:                                         // Admin Prodi
                $mahasiswa = Mahasiswa::all()->count();
                $bebasMasalah = [];
                $pegawai = Pegawai::all()->count();
                $user = $mahasiswa + $pegawai;
                break;
            case 3:                                         // Admin TA
                $jurusan = auth()->user()->pegawai->fk_jurusan;

                $bm0 = Mahasiswa::whereHas('bebasMasalah', function ($query) {
                    $query->where(function ($subQuery) {
                            $subQuery->where('status_ta', '!=', 1);
                        });
                })
                ->whereHas('prodi.jurusan', function ($query) use ($jurusan) {
                    $query->where('fk_jurusan', $jurusan);
                })
                ->count();

                $bm1 = Mahasiswa::whereHas('bebasMasalah', function ($query) {
                        $query->where('status_ta', 1);
                    })
                    ->whereHas('prodi.jurusan', function ($query) use ($jurusan) {
                        $query->where('fk_jurusan', $jurusan);
                    })
                    ->count();

                $mahasiswa = Mahasiswa::whereHas('prodi.jurusan', function ($query) use ($jurusan) {
                    $query->where('fk_jurusan', $jurusan);
                })->count();

                $bebasMasalah = [$bm0, $bm1];
                $pegawai = [];
                $user = [];
                break;
            default:                                         // Staff keuangan & perpustakaan
                $mahasiswa = Mahasiswa::all()->count();
                $bebasMasalah = BebasMasalah::all()->count();
                $pegawai = [];
                $user = [];
                break;
            }

        return view('dashboard.home.switcher', [
            'role' => $this->role,
            'profile' => $this->profile,
            'mahasiswa' => $mahasiswa,
            'bebasMasalah' => $bebasMasalah,
            'pegawai' => $pegawai,
            'user' => $user,
        ]);
    }

    public function getUser(User $user)
    {
        return view('dashboard.user', [
            'role' => $this->role,
            'profile' => $this->profile
        ]);
    }

    public function getProfile(User $user)
    {
        return view('dashboard.profile.switcher', [
            // 'user' => $user->where('id', auth()->user()->id)->first()
        ]);
    }
}
