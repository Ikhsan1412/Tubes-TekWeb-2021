<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrasi Katalog</title>

    <style>
        .CatalogueTable {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd
        }
    </style>
    <!-- Custom fonts for this template-->
    <link href="https://gitcdn.link/repo/Ikhsan1412/Tubes-TekWeb-2021/main/vendor/fontawesome-free/css/all.min.css"
        rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://gitcdn.link/repo/Ikhsan1412/Tubes-TekWeb-2021/main/css/sb-admin-2.css" rel="stylesheet">

    <script type="text/javascript"
        src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=COIjiVsgUcIZ4RR4JAhXQ2o39M72b26kxZQtWEnVkG-_J3Km_gaZDJ2k6eeXIx6TNU_FUOPgthWGqUrCbqJPQUkvyRqE76x7n232CC4WBlhBAcnq8dSmy7DiWfIdN9m7V0mNF86yVq28WSz13bIArw"
        charset="UTF-8"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Panel Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/TubesTekWeb/index.php/Admin/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Landing Page</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/TubesTekWeb/index.php/Admin/jacketVIEW">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/TubesTekWeb/index.php/Admin/aboutVIEW">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tentang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">White Weaver<Datag></Datag>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="https://jmyuda.dm.files.1drv.com/y4pqMFiwYqclbRWuhO_ttkDOPMcO29KqmditEFoM8XqnhG9vsXaS4yf_SCt3IGTqthrbteKsNt2Ih4Gp13vXrM6DEfUQZmvaQqraF2i19B3KT3htD7Kt6VQbBhDAEPtvsshoIMzeswEeCy2eCCGghYyPsoHAAe7_hfshBHMxZW9YTRt2-5yvgff7IIJ3pnBaqXPUQFD1GiUaur6sV-xnvoVvA/88886596_p0.jpg?psid=1https://jmyuda.dm.files.1drv.com/y4pqMFiwYqclbRWuhO_ttkDOPMcO29KqmditEFoM8XqnhG9vsXaS4yf_SCt3IGTqthrbteKsNt2Ih4Gp13vXrM6DEfUQZmvaQqraF2i19B3KT3htD7Kt6VQbBhDAEPtvsshoIMzeswEeCy2eCCGghYyPsoHAAe7_hfshBHMxZW9YTRt2-5yvgff7IIJ3pnBaqXPUQFD1GiUaur6sV-xnvoVvA/88886596_p0.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">KELOLA JAKET</h1>
                    </div>
                    <!-- EXAMPLE DATA -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Katalog</h6>
                        </div>
                        <a href="http://localhost/TubesTekWeb/index.php/Admin/tambah" class="btn btn-success btn-sm">
                            <span class="text">Tambah Jaket</span>
                        </a>
                        <div class="card-body">

                            <!-- Ini ke bawah tempat database dimuat-->
                            <div class="table-responsive">
                                <div class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <table class="CatalogueTable CatalogueTH CatalogueTD CatalogueTR" table border='1'>
                                        <tr>
                                            <th>Merk</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Harga</th>
                                            <th>Jenis Jaket</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php foreach ($jaket->result() as $r): ?>
                                        <tr>
                                            <td>
                                                <?php echo $r->merk_jaket ?>
                                            </td>
                                            <td>
                                                <?php echo $r->color_jaket ?>
                                            </td>
                                            <td>
                                                <?php echo $r->size_jaket ?>
                                            </td>
                                            <td>
                                                <?php echo $r->harga_jaket ?>
                                            </td>
                                            <td>
                                                <?php echo $r->jenis_jaket ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url("Admin/update/".$r->id_jaket) ?>"
                                                    class="btn btn-warning btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </span>
                                                    <span class="text">Ubah</span>
                                                </a>
                                                <a class="btn btn-danger btn-icon-split" data-toggle="modal"
                                                    data-target="#deleteModal">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Hapus</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                                <!-- Sampe sini databasenya -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Kelompok 6 &copy; FSI 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Anda harus masuk lagi</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                    <a class="btn btn-primary" href="http://localhost/TubesTekWeb/index.php/User/">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus data?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda ingin menghapus data?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                    <a href="<?php echo site_url("Admin/hapus/".$r->id_jaket) ?>" class="btn btn-danger">
                        <span class="text">Hapus</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://gitcdn.link/repo/Ikhsan1412/Tubes-TekWeb-2021/main/vendor/jquery/jquery.min.js"></script>
    <script
        src="https://gitcdn.link/repo/Ikhsan1412/Tubes-TekWeb-2021/main/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script
        src="https://gitcdn.link/repo/Ikhsan1412/Tubes-TekWeb-2021/main/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://gitcdn.link/repo/Ikhsan1412/Tubes-TekWeb-2021/main/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="https://gitcdn.link/repo/Ikhsan1412/Tubes-TekWeb-2021/main/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="https://gitcdn.link/repo/Ikhsan1412/Tubes-TekWeb-2021/main/js/demo/chart-area-demo.js"></script>
    <script src="https://gitcdn.link/repo/Ikhsan1412/Tubes-TekWeb-2021/main/js/demo/chart-pie-demo.js"></script>

</body>

</html>