<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project()
    {
        // Mengambil tiga baris pertama dari tabel tbl_dinamis
        $konten = TblDinamis::all();

        // Mengirim data ke component view
        return view('project', compact('konten'));
    }
}
