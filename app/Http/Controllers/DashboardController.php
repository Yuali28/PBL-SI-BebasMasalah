<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Mahasiswa;
use App\Models\BebasMasalah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
            }
            return $next($request);
        });
    }

    public function getHome()
    {
        switch ($this->role) {
            case 1:     // Ketua Jurusan
                $return = $this->kjr();
                break;
            case 2:     // Admin Prodi
                $return = $this->apd();
                break;
            case 3:     // Admin TA
                $return = $this->ata();
                break;
            default:    // Staff keuangan & perpustakaan
                $return = $this->stf();
                break;
            }

        return view('dashboard.home.switcher', [
            'role' => $this->role,
            'profile' => $this->profile,
            'mahasiswa' => $return[0],
            'bebasMasalah' => $return[1],
            'pegawai' => $return[2],
            'user' => $return[3],
        ]);
    }

    public function kjr()
    {
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

        $return = array($mahasiswa, $bebasMasalah, $pegawai, $user);
        return $return;
    }

    public function apd()
    {
        $mahasiswa = Mahasiswa::all()->count();
        $bebasMasalah = [];
        $pegawai = Pegawai::all()->count();
        $user = $mahasiswa + $pegawai;

        $return = array($mahasiswa, $bebasMasalah, $pegawai, $user);
        return $return;
    }

    public function ata()
    {
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

        $return = array($mahasiswa, $bebasMasalah, $pegawai, $user);
        return $return;
    }

    public function stf()
    {
        $mahasiswa = Mahasiswa::all()->count();
        $bebasMasalah = [
            BebasMasalah::where('status_keuangan', 0)->count() , BebasMasalah::where('status_keuangan', 1)->count(),
            BebasMasalah::where('status_perpus', 0)->count() , BebasMasalah::where('status_perpus', 1)->count()
        ];
        $pegawai = [];
        $user = [];

        $return = array($mahasiswa, $bebasMasalah, $pegawai, $user);
        return $return;
    }

}
