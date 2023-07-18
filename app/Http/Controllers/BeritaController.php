<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        // dd($request);
        $validatedData = $request->validate([
            'thumbnail_berita' => 'required|image|mimes:jpeg,png,jpg',
            'judul_berita' => 'required',
            'konten_berita' => 'required',
            'status_berita' => 'required',
            'berita_utama' => 'required',
        ]);
        

        $thumbnailPath = $request->file('thumbnail_berita')->store('thumbnails');

        $konten_berita = html_entity_decode($validatedData['konten_berita']);

        $berita = [
            'thumbnail_berita' => $thumbnailPath,
            'judul_berita' => $validatedData['judul_berita'],
            'konten_berita' => $konten_berita,
            'status_berita' => $validatedData['status_berita'],
            'berita_utama' => $validatedData['berita_utama'],
        ];

        Berita::create($berita);
        return redirect()->route('dashboard.berita')->with('success', 'Berita has been created.');
    }

    public function edit(Berita $berita)
    {
        return view('dashboard.berita.edit', compact('berita'));
    // Implementasi logika untuk halaman edit berita
    }

    public function update(Request $request, Berita $berita)
    {
        // Validasi inputan
        $validatedData = $request->validate([
            'thumbnail_berita' => 'image|mimes:jpeg,png,jpg',
            'judul_berita' => 'required',
            'konten_berita' => 'required',
            'status_berita' => 'required',
            'berita_utama' => 'required',
        ]);

    // Perbarui data berita yang diperlukan
        $berita->thumbnail_berita = $validatedData['thumbnail_berita'];
        $berita->judul_berita = $validatedData['judul_berita'];
        $berita->konten_berita = html_entity_decode($validatedData['konten_berita']);
        $berita->status_berita = $validatedData['status_berita'];
        $berita->berita_utama = $validatedData['berita_utama'];

        // Perbarui thumbnail berita jika ada yang diunggah
        if ($request->hasFile('thumbnail_berita')) {
        // Hapus thumbnail berita sebelumnya (optional)
        Storage::delete($berita->thumbnail_berita);

        // Simpan thumbnail baru
        $berita->thumbnail_berita = $request->file('thumbnail_berita')->store('thumbnails');
        }
    }

    public function destroy(Berita $berita)
    {
    // Hapus berita dari database
    $berita->delete();

    return redirect()->route('dashboard.berita.view')->with('success', 'Berita has been deleted.');
    }
}
