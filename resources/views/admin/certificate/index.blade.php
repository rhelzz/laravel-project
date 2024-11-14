<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sertifikat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Daftar Sertifikat</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('certificate.create') }}" class="btn btn-primary mb-3">Tambah Sertifikat</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Sertifikat</th>
                <th>Issued By</th>
                <th>Issued At</th>
                <th>Deskripsi</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($certificates as $certificate)
                <tr>
                    <td>{{ $certificate->name }}</td>
                    <td>{{ $certificate->issued_by }}</td>
                    <td>{{ $certificate->issued_at }}</td>
                    <td>{{ $certificate->description }}</td>
                    <td><a href="{{ asset('storage/' . $certificate->file) }}" class="btn btn-info btn-sm" target="_blank">Lihat</a></td>
                    <td>
                        <a href="{{ route('certificate.edit', $certificate->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('certificate.destroy', $certificate->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
