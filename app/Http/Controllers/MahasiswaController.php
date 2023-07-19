<?php

namespace App\Http\Controllers;

use PDF; // Make sure the alias is 'PDF'
use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    //
    public function cetak_pdf()
{
    $mahasiswa = auth()->user()->mahasiswa;

    $pdf = PDF::loadView('dashboard.cetak.mahasiswa_pdf', ['mahasiswa' => $mahasiswa]);
    return $pdf->stream();
}

}
