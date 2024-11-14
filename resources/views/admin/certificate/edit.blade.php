<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sertifikat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Edit Sertifikat</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('certificate.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Sertifikat</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $certificate->name }}" required>
        </div>

        <div class="mb-3">
            <label for="issued_by" class="form-label">Issued By</label>
            <input type="text" name="issued_by" class="form-control" id="issued_by" value="{{ $certificate->issued_by }}" required>
        </div>

        <div class="mb-3">
            <label for="issued_at" class="form-label">Issued At</label>
            <input type="text" name="issued_at" class="form-control" id="issued_at" value="{{ $certificate->issued_at }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" id="description" rows="3" required>{{ $certificate->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">File (PDF)</label>
            <input type="file" name="file" class="form-control" id="file" accept="application/pdf">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('certificate.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
