<?php

namespace App\Http\Controllers;

use App\Models\BebasMasalah;
use Illuminate\Http\Request;

class BebasMasalahController extends Controller
{
    public function getBebasMasalah(BebasMasalah $bebasmasalah)
    {
        return view('dashboard.bebas-masalah.switcher', [
            // 'user' => $user->where('id', auth()->user()->id)->first()
        ]);
    }
}
