<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BeritaController extends Controller
{

    protected $role;
    protected $profile;


    public function getBerita(Berita $berita)
    {
        return view('dashboard.berita.view', [
            'berita' => Berita::all()
        ]);
        // Implementasi logika untuk tampilan berita di dashboard
    }

    public function create()
    {
        // Implementasi logika untuk halaman pembuatan berita
        return view('dashboard.berita.create', [
            'berita' => Berita::all()
        ]);
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $validatedData = $request->validate([
            // Atur aturan validasi untuk setiap field inputan
        ]);

        // Simpan berita baru ke database
        $berita = Berita::create($validatedData);

        // Redirect ke halaman tampilan berita atau ke halaman lain yang diinginkan
    }

    public function edit(Berita $berita)
    {
        // Implementasi logika untuk halaman edit berita
    }

    public function update(Request $request, Berita $berita)
    {
        // Validasi inputan
        $validatedData = $request->validate([
            // Atur aturan validasi untuk setiap field inputan
        ]);

        // Update berita dalam database
        $berita->update($validatedData);

        // Redirect ke halaman tampilan berita atau ke halaman lain yang diinginkan
    }

    public function destroy(Berita $berita)
    {
        // Hapus berita dari database
        $berita->delete();

        // Redirect ke halaman tampilan berita atau ke halaman lain yang diinginkan
    }
}
