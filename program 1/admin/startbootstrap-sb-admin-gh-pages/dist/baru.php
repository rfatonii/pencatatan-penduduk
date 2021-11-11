    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Dashboard - SB Admin</title>
            <link href="css/styles.css" rel="stylesheet" />
            <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        </head>
        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <a class="navbar-brand" href="#x`">Admin</a>
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
                            <a class="dropdown-item" href="login.php">Logout</a>
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
                                
                                <a class="nav-link" href="baru.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                    Penduduk Baru
                                </a>
                                <a class="nav-link" href="mutasi.php">
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        Tambah
                                </button>
                                
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                            <thead>
                                                <tr>
                                                    <th>NIK</th>
                                                    <th>No. KK</th>
                                                    <th>Nama</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>tanggal. Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Agama</th>
                                                    <th>alamat</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                        <?php
                                        include "koneksiadmin.php";
                                        $ambil = mysqli_query ($conn,"select * from penduduk_baru");
                                        while($data =  mysqli_fetch_array($ambil)){
                                            $nik = $data ['nik'];
                                            $nokk = $data['nokk'];
                                            $nama = $data['nama'];
                                            $tempat = $data['tempat'];
                                            $lahir = $data['lahir'];
                                            $jekel = $data['jekel'];
                                            $agama = $data['agama'];
                                            $asal = $data['asal'];
                                            $baru = $data['baru'];
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?=$nik;?></td>
                                                    <td><?=$nokk;?></td>
                                                    <td><?=$nama;?></td>
                                                    <td><?=$tempat;?></td>
                                                    <td><?=$lahir;?></td>
                                                    <td><?=$jekel;?></td>
                                                    <td><?=$agama;?></td>
                                                    <td><?=$baru;?></td>
                                                    <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$nik;?>">
                                                    Edit
                                                    </button>
                                                    <input type="hidden" name="nikhapus" value="<?=$nik;?>">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$nik;?>">
                                                    Delete
                                                    </button>
                                                    </td>
                                                </tr>

                                                <!-- edit -->
                                                <div class="modal fade" id="edit<?=$nik;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form method="post">
                                                    <div class="modal-body">
                                                        <input type="text" name="updatekk" value="<?=$nokk;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="updatenama" value="<?=$nama;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="updatetempat" value="<?=$tempat;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="updatealamat" value="<?=$baru;?>" class="form-control" required>
                                                        <br>

                                                        <!-- <input type="hidden" name="nik" value="<?=$nik;?>" class="form-control" required> -->

                                                        <button type="submit" name="updatedata" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                                                    </div>
                                                    </form>

                                                    </div>
                                                </div>
                                                </div>


                                                <!-- Delete -->
                                                <div class="modal fade" id="delete<?=$nik;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus?</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form method="post">
                                                    <div class="modal-body">
                                                    Hapus <?=$nama;?> ?
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" name="hapusdata" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                                                    </div>

                                                    </form>

                                                    </div>
                                                </div>
                                                </div>

                                            </tbody>
                        <?php
                        };
                        ?>

                                        </table>
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

                <!-- The Modal -->
            <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
            </div>

    </html>
