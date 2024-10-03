<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin Report</title>
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
                    <x-navbar-admin>
                    </x-navbar-admin>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard Report</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Report Overview</li>
                        </ol>
                        <!-- Statistic Cards -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2>1,234</h2>
                                        <a class="small text-white stretched-link" href="#!">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Sales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2>$12,345</h2>
                                        <a class="small text-white stretched-link" href="#!">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Orders</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2>456</h2>
                                        <a class="small text-white stretched-link" href="#!">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Page Views</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2>78,910</h2>
                                        <a class="small text-white stretched-link" href="#!">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Simple Table Example -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Recent Transactions
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1001</td>
                                            <td>John Doe</td>
                                            <td>2023-09-01</td>
                                            <td>$1,000</td>
                                            <td>Completed</td>
                                        </tr>
                                        <tr>
                                            <td>1002</td>
                                            <td>Jane Smith</td>
                                            <td>2023-09-02</td>
                                            <td>$750</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>1003</td>
                                            <td>Michael Lee</td>
                                            <td>2023-09-03</td>
                                            <td>$500</td>
                                            <td>Cancelled</td>
                                        </tr>
                                        <tr>
                                            <td>1004</td>
                                            <td>Emily Johnson</td>
                                            <td>2023-09-04</td>
                                            <td>$300</td>
                                            <td>Completed</td>
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
