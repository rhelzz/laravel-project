<?php

namespace App\Http\Controllers\Admin;

use App\Models\Certificate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificate.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificate.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|string|max:255',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf|max:10000'
        ]);

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('file', 'public');
        }

        Certificate::create($data);

        return redirect()->route('certificate.index')
                         ->with('success', 'Sertifikat berhasil ditambahkan.');
    }

    public function show(Certificate $certificate)
    {
        return view('admin.certificate.show', compact('certificate'));
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificate.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|string|max:255',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf|max:10000'
        ]);

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('file', 'public');
        }

        $certificate->update($data);

        return redirect()->route('certificate.index')
                         ->with('success', 'Sertifikat berhasil diupdate.');
    }

    public function destroy(Certificate $certificate)
    {
        $certificate->delete();

        return redirect()->route('certificate.index')
                         ->with('success', 'Sertifikat berhasil dihapus.');
    }
}
