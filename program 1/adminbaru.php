<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Dashboard - SB Admin</title>
            <link href="admin.css" rel="stylesheet" />
            <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        </head>
        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Admin</a>
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
                <!-- Navbar Search-->
                <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <!-- Navbar-->
                <ul class="navbar-nav ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <!-- <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Activity Log</a> -->
                            <!-- <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="adminlogin.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Daftar</div>
                                <a class="nav-link" href="admin.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                    Penduduk
                                </a>
                                
                                <a class="nav-link" href="adminbaru.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                    Penduduk Baru
                                </a>
                                <a class="nav-link" href="adminmutasi.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                    Mutasi Penduduk
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid">
                            <h1 class="mt-4">Penduduk Baru</h1>



                            <div class="card mb-4">
                                <div class="card-header">
                                <!-- button modal -->
                                <button type="button" class="btn btn-primary"><a href="tambahadminbaru.php" style = "color: white; text-decoration: none;">
                                        Tambah
                                </a>
                                </button>
                                
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIK</th>
                                                    <th>No. KK</th>
                                                    <th>Nama</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>tanggal. Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Agama</th>
                                                    <th>alamat Asal</th>
                                                    <th>alamat Baru</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                        <?php
                                        include "connect.php";
                                        $no=1;
                                        $ambil = mysqli_query ($koneksi,"select * from penduduk_baru");
                                        while($data =  mysqli_fetch_array($ambil)){
                                            echo '
                                                <tr>
                                                    <td>'.$no.'</td>
                                                    <td>'.$data['nik'].'</td>
                                                    <td>'.$data['nokk'].'</td>
                                                    <td>'.$data['nama'].'</td>
                                                    <td>'.$data['tempat'].'</td>
                                                    <td>'.$data['lahir'].'</td>
                                                    <td>'.$data['jekel'].'</td>
                                                    <td>'.$data['agama'].'</td>
                                                    <td>'.$data['asal'].'</td>
                                                    <td>'.$data['baru'].'</td>
                                                    <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit">
                                                    <a href="adminubah.php" style="color:white;text-decoration:none;">Edit</a>
                                                    </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                                                    <a href="?nik='.$data['nik'].'" style="color:white;text-decoration:none;">Hapus</a>
                                                    </button>
                                                    </td>
                                                </tr>';

                                                $no++;
                                        };
                                        ?>
                                        </table>
                                        <?php
                                        if(isset($_GET['nik'])) {

                                            mysqli_query($koneksi, "delete from penduduk_baru where nik='$_GET[nik]'");

                                            echo "data terhapus";
                                            echo "<meta http-equiv=refresh content=2;URL='adminbaru.php'>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid">
                            <!-- <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div> -->
                        </div>
                    </footer>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/datatables-demo.js"></script>
        </body>



    </html>