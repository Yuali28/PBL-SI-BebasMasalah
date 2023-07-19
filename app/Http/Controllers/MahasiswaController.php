<?php

namespace App\Http\Controllers;

use PDF; // Make sure the alias is 'PDF'
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\BebasMasalah;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MahasiswaController extends Controller
{
    //
    public function cetak_pdf()
{
    $mahasiswa = auth()->user()->mahasiswa;

    $pdf = PDF::loadView('dashboard.cetak.mahasiswa_pdf', ['mahasiswa' => $mahasiswa]);
    return $pdf->stream();
}
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

        $this->mhsUser($validatedData, 0);

        return redirect()->route('dashboard.user.mahasiswa');
    }

    public function putMahasiswa(Request $request, $id)
    {
        $edit = User::find($id);

        $validatedData = $request->validate([
            'username' => 'required|min:10|max:16',
            'nama' => 'required|max:50',
            'email' => 'required',
            'program_studi' => 'required',
            'kelas' => 'required',
            'angkatan' => 'required',
            'tahun_lulus' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $password = $request->password ? bcrypt($request->password) : $edit->password;
        $validatedData['password'] = $password;
        $validatedData['telp'] = $request->telp;
        $validatedData['alamat'] = $request->alamat;
        $validatedData['agama'] = $request->agama;
        $validatedData['jenis_kelamin'] = intval($request->jenis_kelamin);
        $validatedData['program_studi'] = intval($request->program_studi);

        $this->mhsUser($validatedData, $id);

        return redirect()->route('dashboard.user.mahasiswa');
    }

    public function deleteMahasiswa($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('dashboard.user.mahasiswa');
    }

    public function mhsUser($data, $edit) {
        $insert = [
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => '0',
        ];

        if ($edit) {
            $user = User::find($edit);
            foreach($insert as $key => $value) {
                $user->$key = $value;
            }
            $user->save();
        } else {
            $user = User::create($insert);
        }

        $this->mhsMhs($data, $user->id_user, $edit);
    }

    public function mhsMhs($data, $id_user, $edit) {
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

        if ($edit) {
            $mahasiswa = Mahasiswa::where('fk_user', $id_user)->first();
            foreach($insert as $key => $value) {
                $mahasiswa->$key = $value;
            }
            $mahasiswa->save();
        } else {
            $mahasiswa = Mahasiswa::create($insert);
        }

        $this->mhsBemas($data, $id_user, $mahasiswa->id_mahasiswa, $edit);
    }

    public function mhsBemas($data, $id_user, $id_mahasiswa, $edit) {
        $insert = [
            'tahun_lulus' => $data['tahun_lulus'],
            'fk_mahasiswa' => $id_mahasiswa,
        ];

        if ($edit) {
            $bebas_masalah = BebasMasalah::where('fk_mahasiswa', $id_mahasiswa)->first();
            foreach($insert as $key => $value) {
                $bebas_masalah->$key = $value;
            }
            $bebas_masalah->save();
        } else {
            $bebas_masalah = BebasMasalah::create($insert);

            $update_user = User::find($id_user);
            $update_user->fk_mahasiswa = $id_mahasiswa;
            $update_user->save();

            $update_mahasiswa = Mahasiswa::find($id_mahasiswa);
            $update_mahasiswa->fk_bm = $bebas_masalah->id_bm;
            $update_mahasiswa->save();

            $update_user = User::find($id_user);
            $update_user->fk_mahasiswa = $id_mahasiswa;
            $update_user->save();
        }
    }

}
