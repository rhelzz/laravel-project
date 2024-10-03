<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis; // Import model
use Illuminate\Http\Request;

class TblDinamisController extends Controller
{
   
    public function index()
    {
        // Mengambil tiga baris pertama dari tabel tbl_dinamis
        $konten = TblDinamis::all();

        // Mengirim data ke component view
        return view('home', compact('konten'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'konten' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        // Menyimpan data ke database
        TblDinamis::create([
            'konten' => $request->konten,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.create')->with('success', 'Data berhasil ditambahkan.');
    }

    public function showTable()
    {
        $konten = TblDinamis::all();
        return view('admin.tabelkonten', compact('konten'));
    }

    // Form untuk mengedit konten
    public function edit($id)
    {
        $konten = TblDinamis::findOrFail($id);
        return view('admin.editkonten', compact('konten'));
    }

    // Simpan hasil update konten
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'konten' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        // Update data konten
        $konten = TblDinamis::findOrFail($id);
        $konten->update([
            'konten' => $request->konten,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.tabelkonten')->with('success', 'Data berhasil diperbarui.');
    }

    // Hapus konten
    public function destroy($id)
    {
        TblDinamis::destroy($id);
        return redirect()->route('admin.tabelkonten')->with('success', 'Data berhasil dihapus.');
    }
}
