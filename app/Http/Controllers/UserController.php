<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\BebasMasalah;
use App\Models\Pegawai;
use App\Models\ProgramStudi;
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
            'user' => $user
        ]);
    }

    public function getMahasiswa()
    {
        $users = User::whereHas('mahasiswa')->get();
        $program_studi = ProgramStudi::all();

        return view('dashboard.user.mahasiswa.view', [
            'users' => $users,
            'program_studi' => $program_studi
        ]);
    }

    public function storeMahasiswa(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|min:8|max:16',
            'password' => 'required',
            'nama' => 'required|max:50',
            'email' => 'required',
            'program_studi' => 'required',
            'kelas' => 'required',
            'angkatan' => 'required',
            'tahun_lulus' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['telp'] = $request->telp;
        $validatedData['alamat'] = $request->alamat;
        $validatedData['agama'] = $request->agama;
        $validatedData['jenis_kelamin'] = intval($request->jenis_kelamin);
        $validatedData['program_studi'] = intval($request->program_studi);

        $this->mhsUser($validatedData);

        return redirect()->route('dashboard.user.mahasiswa');
    }

    public function mhsUser($data) {
        $insert = [
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => '0',
        ];

        $user = User::create($insert);
        $this->mhsMhs($data, $user->id_user);
    }

    public function mhsMhs($data, $id_user) {
        $insert = [
            'nama' => $data['nama'],
            'nim' => $data['username'],
            'angkatan' => $data['angkatan'],
            'kelas' => $data['kelas'],
            'telp' => $data['telp'],
            'alamat' => $data['alamat'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'agama' => $data['agama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'fk_prodi' => $data['program_studi'],
            'fk_user' => $id_user,
        ];

        $mahasiswa = Mahasiswa::create($insert);
        $this->mhsBemas($data, $id_user, $mahasiswa->id_mahasiswa);
    }

    public function mhsBemas($data, $id_user, $id_mahasiswa) {
        $insert = [
            'tahun_lulus' => $data['tahun_lulus'],
            'fk_mahasiswa' => $id_mahasiswa,
        ];
        $bebas_masalah = BebasMasalah::create($insert);

        $update_user = User::find($id_user);
        $update_user->fk_mahasiswa = $id_mahasiswa;
        $update_user->save();

        $update_mahasiswa = Mahasiswa::find($id_mahasiswa);
        $update_mahasiswa->fk_bm = $bebas_masalah->id_bm;
        $update_mahasiswa->save();

        $update_user = User::find(User::latest()->get()->last()->id_user);
        $update_user->fk_mahasiswa = Mahasiswa::latest()->get()->last()->id_mahasiswa;
        $update_user->save();
    }

    public function getPegawai()
    {
        {
            $users = User::whereHas('pegawai')->get();
            $program_studi = ProgramStudi::all();

            return view('dashboard.user.pegawai.view', [
                'users' => $users,
                'program_studi' => $program_studi
            ]);
        }
    }

}
