<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class BeritaController extends Controller
{

    protected $role;
    protected $profile;

    public function getLanding()
    {
        // dd(Berita::all());
        return view('landing', [
            'berita' => Berita::where('status_berita', 1)->get()
        ]);
    }

    public function getRead($id)
    {
        return view('dashboard.berita.read', [
            'berita' => Berita::find($id)
        ]);
    }

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
        // dd($request->file('thumbnail_berita'));
        $validatedData = $request->validate([
            'thumbnail_berita' => 'required|image|mimes:jpeg,png,jpg',
            'judul_berita' => 'required',
            'konten_berita' => 'required',
            'status_berita' => 'required',
            'berita_utama' => 'required',
        ]);


        $thumbnailPath = $request->file('thumbnail_berita')->store('public/thumbnails');

        $konten_berita = html_entity_decode($validatedData['konten_berita']);
        // dd($request->file('thumbnail_berita')->hashName());

        $berita = [
            'thumbnail_berita' => $request->file('thumbnail_berita')->hashName(),
            // 'thumbnail_berita' => $thumbnailPath,
            'judul_berita' => $validatedData['judul_berita'],
            'konten_berita' => $konten_berita,
            'status_berita' => $validatedData['status_berita'],
            'berita_utama' => $validatedData['berita_utama'],
        ];

        if ($validatedData['berita_utama'] == 1 && Berita::where('berita_utama', 1)->first() != null) {
            $old_berita = Berita::where('berita_utama', 1)->first();
            $old_berita->berita_utama = 0;
            $old_berita->save();
        }

        Berita::create($berita);
        return redirect()->route('dashboard.berita')->with('success', 'Berita has been created.');
    }

    public function putBerita(Request $request, $id)
    {
        try{
            $edit = Berita::find($id);

            // Validasi inputan
            $validatedData = $request->validate([
                'thumbnail_berita' => 'image|mimes:jpeg,png,jpg',
                'judul_berita' => 'required',
                'konten_berita' => 'required',
                'status_berita' => 'required',
                'berita_utama' => 'required',
            ]);
    
            // Perbarui data berita yang diperlukan
            $validatedData['thumbnail_berita'] = $request->file('thumbnail_berita');
            $validatedData['judul_berita'] = $request->input('judul_berita');
            $validatedData['konten_berita'] = html_entity_decode($request->input('konten_berita'));
            $validatedData['status_berita'] = $request->input('status_berita');
            $validatedData['berita_utama'] = $request->input('berita_utama');
            
            // $this->putBerita($validatedData, $berita);
            
            // return redirect()->route('dashboard.berita');
            
            if ($request->hasFile('thumbnail_berita')) {
                // Hapus thumbnail berita sebelumnya (optional)
                Storage::delete($edit->thumbnail_berita);
                
                // Simpan thumbnail baru
                $edit->thumbnail_berita = $request->file('thumbnail_berita')->store('thumbnails');
            }

            $edit->judul_berita = $validatedData['judul_berita'];
            $edit->konten_berita = $validatedData['konten_berita'];
            $edit->status_berita = $validatedData['status_berita'];
            $edit->berita_utama = $validatedData['berita_utama'];

            $edit->save();
            
            return redirect()->route('dashboard.berita');
        } catch (ValidationException $e) {
            // Output the validation errors to debug
            dd($e->errors());
        }
    }

    public function deleteBerita($id)
    {
    // Hapus berita dari database
    $berita = Berita::find($id);
        // dd($id);
    $berita->delete();

    return redirect()->route('dashboard.berita')->with('success', 'Berita has been deleted.');
    }
}
