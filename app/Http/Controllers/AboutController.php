<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        // Mengambil tiga baris pertama dari tabel tbl_dinamis
        $konten = TblDinamis::all();

        // Mengirim data ke component view
        return view('about', compact('konten'));
    }
}
