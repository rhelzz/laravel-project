<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skill()
    {
        // Mengambil tiga baris pertama dari tabel tbl_dinamis
        $konten = TblDinamis::all();

        // Mengirim data ke component view
        return view('skill', compact('konten'));
    }
}
