<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bug & Issue Reports - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('template-admin/css/styles.css') }}">
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
                    <h1 class="mt-4">Bug & Issue Reports</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Bug & Issue Reports</li>
                    </ol>

                    <!-- Reports Table -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-bug me-1"></i>
                            Reported Issues
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Severity</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Reported On</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Login Page Error</td>
                                        <td>Error when trying to log in</td>
                                        <td>Critical</td>
                                        <td>Pending</td>
                                        <td>2024-09-12</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">View</a>
                                            <a href="#" class="btn btn-success btn-sm">Resolve</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Broken Link</td>
                                        <td>Link to profile page is broken</td>
                                        <td>Minor</td>
                                        <td>Resolved</td>
                                        <td>2024-09-10</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">View</a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <!-- Additional rows as needed -->
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
</body>
</html>
