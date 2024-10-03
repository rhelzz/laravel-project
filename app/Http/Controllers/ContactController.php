<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        // Mengambil tiga baris pertama dari tabel tbl_dinamis
        $konten = TblDinamis::all();

        // Mengirim data ke component view
        return view('contact', compact('konten'));
    }
}
