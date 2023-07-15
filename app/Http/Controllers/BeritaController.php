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
            'thumbnail_berita' => 'required|image|mimes:jpeg,png,jpg',
            'judul_berita' => 'required',
            'konten_berita' => 'required',
            'status_berita' => 'required|in:published,draft',
        ]);

        $thumbnailPath = $request->file('thumbnail_berita')->store('thumbnails');

        $berita = new Berita;
        $berita->thumbnail_berita = $thumbnailPath;
        $berita->judul_berita = $request->input('judul_berita');
        $berita->konten_berita = $request->input('konten_berita');
        $berita->status_berita = $request->input('status_berita');
        $berita->save();

        // Simpan berita baru ke database
        $berita = Berita::create($validatedData);
        return redirect()->route('dashboard.berita.create')->with('success', 'Berita has been created.');
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
