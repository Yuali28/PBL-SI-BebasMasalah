<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\Pegawai;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PegawaiController extends Controller
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

    public function getPegawai()
    {
        {
            $users = User::whereHas('pegawai')->get();
            $program_studi = ProgramStudi::all();
            $jurusan = Jurusan::all();

            return view('dashboard.user.pegawai.view', [
                'users' => $users,
                'program_studi' => $program_studi,
                'jurusan' => $jurusan
            ]);
        }
    }

    public function storePegawai(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'username' => 'required|unique:users|min:16|max:16',
            'password' => 'required',
            'nama' => 'required|max:50',
            'role' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $dosen = $validatedData['role'] > 3 ? 0 : 1;
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['program_studi'] = intval($request->program_studi);
        $validatedData['jurusan'] = intval($request->jurusan);
        $validatedData['nip'] = $request->nip;
        $validatedData['nidn'] = $request->nidn;
        $validatedData['dosen'] = $dosen;

        $this->pgwUser($validatedData, 0);

        return redirect()->route('dashboard.user.pegawai');
    }

    public function putPegawai(Request $request, $id)
    {
        try {
        // dd($request);

        $edit = User::find($id);
            // dd($request);
        $validatedData = $request->validate([
            'username' => 'required|min:16|max:16',
            'nama' => 'required|max:50',
            'role' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        // dd($request);
        $prodi = $request->program_studi ? intval($request->program_studi) : null;
        $jurusan = $request->jurusan ? intval($request->jurusan) : null;
        $password = $request->password ? bcrypt($request->password) : $edit->password;
        $dosen = $validatedData['role'] > 3 ? 0 : 1;
        $validatedData['password'] = $password;
        $validatedData['program_studi'] = $prodi;
        $validatedData['jurusan'] = $jurusan;
        $validatedData['nip'] = strval($request->nip);
        $validatedData['nidn'] = strval($request->nidn);
        $validatedData['jenis_kelamin'] = intval($request->jenis_kelamin);
        $validatedData['dosen'] = $dosen;

        // dd($validatedData);

        $this->pgwUser($validatedData, $id);

        return redirect()->route('dashboard.user.pegawai');

    } catch (ValidationException $e) {
        // Output the validation errors to debug
        dd($e->errors());
    }
    }

    public function deletePegawai($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('dashboard.user.pegawai');
    }

    public function pgwUser($data, $edit) {
        $insert = [
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => $data['role'],
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

        $this->pgwPgw($data, $user->id_user, $edit);
    }

    public function pgwPgw($data, $id_user, $edit) {
        $insert = [
            'nama' => $data['nama'],
            'nik' => $data['username'],
            'nip' => $data['nip'],
            'nidn' => $data['nidn'],
            'dosen' => $data['dosen'],
            'telp' => $data['telp'],
            'alamat' => $data['alamat'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'agama' => $data['agama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'fk_prodi' => $data['program_studi'],
            'fk_jurusan' => $data['jurusan'],
            'fk_user' => $id_user,
        ];

        if ($edit) {
            $pegawai = Pegawai::where('fk_user', $id_user)->first();
            foreach($insert as $key => $value) {
                $pegawai->$key = $value;
            }
            $pegawai->save();
        } else {
            $pegawai = Pegawai::create($insert);
        }
    }


}
