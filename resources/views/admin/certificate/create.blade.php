<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Skill - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('template-admin/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <x-navbar-full></x-navbar-full>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <x-navbar-admin></x-navbar-admin>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main class="ms-5">
                    <div class="container mt-5">
                        <h1>Tambah Sertifikat</h1>
                    
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    
                        <form action="{{ route('certificate.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                    
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Sertifikat</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                    
                            <div class="mb-3">
                                <label for="issued_by" class="form-label">Issued By</label>
                                <input type="text" name="issued_by" class="form-control" id="issued_by" required>
                            </div>
                    
                            <div class="mb-3">
                                <label for="issued_at" class="form-label">Issued At</label>
                                <input type="date" name="issued_at" class="form-control" id="issued_at" required>
                            </div>
                    
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                            </div>
                    
                            <div class="mb-3">
                                <label for="file" class="form-label">File (PDF)</label>
                                <input type="file" name="file" class="form-control" id="file" accept="application/pdf">
                            </div>
                    
                            <button type="submit" class="btn btn-primary">Simpan Sertifikat</button>
                            <a href="{{ route('certificate.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template-admin/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template-admin/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('template-admin/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template-admin/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
