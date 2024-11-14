<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sertifikat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Detail Sertifikat</h1>

    <p><strong>Nama Sertifikat:</strong> {{ $certificate->name }}</p>
    <p><strong>Issued By:</strong> {{ $certificate->issued_by }}</p>
    <p><strong>Issued At:</strong> {{ $certificate->issued_at }}</p>
    <p><strong>Deskripsi:</strong> {{ $certificate->description }}</p>
    <p><strong>File:</strong> <a href="{{ asset('storage/' . $certificate->file) }}" target="_blank">Lihat File</a></p>

    <a href="{{ route('certificate.index') }}" class="btn btn-secondary">Kembali</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
