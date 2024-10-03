<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Bank - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('template-admin/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <x-navbar-full>
        </x-navbar-full>
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
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Bank</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Bank</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Below is a static list of files/documents available in the data bank. You can view or download these files.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-folder me-1"></i>
                                Data Bank Files
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Document Name</th>
                                            <th>Type</th>
                                            <th>Size</th>
                                            <th>Date Uploaded</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Annual Report 2023</td>
                                            <td>PDF</td>
                                            <td>2.5 MB</td>
                                            <td>01/09/2024</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Download</a>
                                                <a href="#" class="btn btn-info btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Financial Report Q1 2024</td>
                                            <td>Excel</td>
                                            <td>1.2 MB</td>
                                            <td>15/08/2024</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Download</a>
                                                <a href="#" class="btn btn-info btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Project Proposal</td>
                                            <td>Word</td>
                                            <td>800 KB</td>
                                            <td>20/07/2024</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Download</a>
                                                <a href="#" class="btn btn-info btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Meeting Notes 2024</td>
                                            <td>Text</td>
                                            <td>350 KB</td>
                                            <td>05/07/2024</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Download</a>
                                                <a href="#" class="btn btn-info btn-sm">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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