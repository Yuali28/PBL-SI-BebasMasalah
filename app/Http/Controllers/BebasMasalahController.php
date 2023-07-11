<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\BebasMasalah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BebasMasalahController extends Controller
{
    protected $role;
    protected $profile;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $user = auth()->user();
            $this->role = $user->role;

            if($this->role > 0) {
                $this->profile = [$user->mahasiswa];
            } else {
                $this->profile = [$user->mahasiswa, $user->bebasMasalah];
            }
            return $next($request);
        });
    }

    public function getBebasMasalah(BebasMasalah $bebasmasalah)
    {
        return view('dashboard.bebas-masalah.switcher', [
            'role' => $this->role,
            'bebasMasalah' => BebasMasalah::all()
        ]);
    }

    public function putPengajuan(Request $request)
    {
        $this->validate($request, [
            'lembar_persetujuan' => 'mimes:pdf|max:8000',
            'lembar_pengesahan' => 'mimes:pdf|max:8000',
            'lembar_konsultasi_dospem_1' => 'mimes:pdf|max:8000',
            'lembar_konsultasi_dospem_2' => 'mimes:pdf|max:8000',
            'lembar_revisi' => 'mimes:pdf|max:8000',
        ]);

        $bebas_masalah = BebasMasalah::find(auth()->user()->bebasMasalah->id_bm);
        $nim = auth()->user()->mahasiswa->nim;
        $tahun_lulus = auth()->user()->bebasMasalah->tahun_lulus;

        foreach($request->files->keys() as $file) {
            $judul = ucwords(str_replace('_', ' ', $file));
            $bebas_masalah->$file = $this->lembar($request, $nim, $tahun_lulus, $judul);
        }

        $bebas_masalah->save();
        return redirect()->back();
    }

    public function putPersetujuan(Request $request)
    {
        $role = auth()->user()->role;
        switch ($role) {
            case 3:
                $this->ata($request);
                break;
            case 4:
                $this->keu($request);
                break;
            case 5:
                $this->prp($request);
                break;
        }
    }

    // function yg dipake gasan logic, kd dipakai di route
    public function lembar($request, $nim, $tahun_lulus, $judul)
    {
        $judul_lower = str_replace(' ', '_', strtolower($judul));

        if ($request->hasFile($judul_lower)) {
            $file_path = 'Lembar BM/' . $tahun_lulus . '/' . $nim;
            $file_before = $request->$judul_lower->getClientOriginalName();
            $file_after = $nim . '_'. $judul . '.pdf';

            if ($file_before == auth()->user()->bebasMasalah->$judul_lower) {
                Storage::disk('public')->delete($file_path . $file_after);
            }

            $file = $request->file($judul_lower);
            $file->storeAs($file_path, $file_after);

            return $file_after;
        }
    }

    public function ata($request)
    {

    }

    public function keu($request)
    {

    }

    public function prp($request)
    {

    }
}
