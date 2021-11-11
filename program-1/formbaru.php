<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formbaru1.css">
    <title>Form pindah</title>
</head>
<body>

    
    <header>

        <div class="nyatu">
        <div class="logo">
            <img src="png/logoKlapanunggal.png">
        </div>

        <div class="jdl">
            <h3>WEBSITE RESMI DESA <br> CIKAHURIPAN KLAPANUNGGAL</h3>
        </div>
        </div>
        <div class="link">
            <ul>
                <li><a href="datapenduduk.php">Home</a></li>
                <li><a href="#">Layanan</a>
                    <div class="toogle">
                    <ul>
                    <li><a href="formbaru.php">Pencatatan<br> Penduduk Baru</a></li>
                        <li><a href="mutasi.php">Pengajuan<br>Mutasi/ pindah</a></li>
                    </ul>
                    </div>
                </li>
                <li><a href="#">Profil Desa</a>
                    <div class="toogle">
                    <ul>
                        <li><a href="#">Visi Misi</a></li>
                        <li><a href="#">Sejarah Desa</a></li>
                        <li><a href="#">Perangkat Desa</a></li>
                    </ul>
                    </div>
                </li>
            </ul>
        </div>
    </header>

<div class="all">
<div class="forum">
<form method="post" action="fbsimpan.php">
    <div class="form-registrasi">

     <div class="form-penduduk">
    <div class="page1">
        <div class="header-page">
            <h2>FORM REGISTRASI PENDUDUK BARU</h2>
            
            <p>Silahkan Isikan Data Diri Anda.</p>
        </div>
    </div>

    <div class="form">
        <div class="contens">
            <label for="judul">
                <div class="header-form">
                    <span class="form-build">NIK</span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textbox">
                    <input type="text" name="nik" class="form-contens">
                </div>
            </label>
        </div>

        <div class="contens">
            <label for="judul">
                <div class="header-form">
                    <span class="form-build">No KK</></span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textbox">   
                    <input type="text" name="nokk" class="form-contens">
                </div>
            </label>
        </div>

        <div class="contens">
            <label for="judul">
                <div class="header-form">
                    <span class="form-build">Nama</span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textbox">
                    <input type="text" name="nama" class="form-contens">
                </div>
            </label>
        </div>

        <div class="contens">
            <label for="judul">
                <div class="header-form">
                    <span class="form-build">Tempat Lahir</span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textbox">
                    <input type="text" name="tempat" class="form-contens">
                </div>
            </label>
        </div>

        <div class="contens">
            <label for="judul">
                <div class="header-form">
                    <span class="form-build">Tanggal Lahir</span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textdate">
                    <input type="date" name ="lahir" class="date">
                </div>
            </label>
        </div>

        <div class="contens-jk">
            <label for="judul">
                <div class="header-form jk">
                    <span class="form-build">Jenis Kelamin</span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textradio">
                    <input type="radio" name="jk" value="Laki-Laki" class="jenis-kelamin"> Laki - Laki
                    <input type="radio" name="jk" value="Perempuan"
                    class="jenis-kelamin"> Perempuan
                </div>
            </label>
        </div>

        <div class="contens">
            <label for="judul">
                <div class="header-form">
                    <span class="form-build">Agama</span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="select-religion">
                    <select name="agama" class ="religion">
                        <option value="1">Budha</option>
                        <option value="2">Hindu</option>
                        <option value="3">Islam</option>
                        <option value="4">Katholik</option>
                        <option value="5">Protestan</option>
                        <option value="6">Konghucu</option>
                      
                    </select>
                </div>
            </label>
        </div>

        <div class="contens">
            <label for="judul">
                <div class="header-form">
                    <span class="form-build">Alamat Asal</span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textbox">
                    <input type="text" name="asal" class="form-contens">
                </div>
            </label>
        </div>

        <div class="contens">
            <label for="judul">
                <div class="header-form">
                    <span class="form-build">Alamat Baru</span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textbox">
                    <input type="text" name ="baru" class="form-contens">
                </div>
            </label>
        </div>

        <div class="text">
            <p>Pastikan Kembali Data Yang di Isi Sudah Benar!</p>
        </div>
        

        <div class="btn">
            <div class="end">
                <input type ="submit" value = "Kirim" name="simpan" class="bottom">
            </div>

            </div>
        </div>
        </div>
        
    </div>
</form>
</div>


        <div class ='nav-bar'>
            <div class="nav-bar-1">
            <div class="information">
                <h2>Informasi</h2>
            </div>
            
            <div class="information-p">
                <p>
                    Masukan data yang diminta, dan pastikan Anda menulis dengan benar.
                </p>
                <br>
                <p>
                    Dengan mengeklik tombol simpan, data anda sebagai penduduk akan otomatis terdaftar dikantor desa Cikahuripan.
                </p>
            </div>
        
            </div>
        </div>

</div>

<footer>
    <div class="addr">
        <p id="office">Kantor Desa Cikahuripan</p>
        <p id="address">Jl. Raya Klapanunggal-Cipeucang No. 1 Cibeber. Kode Pos 16710</p>
    </div>

    <div class="line"></div>

    <div class="linkicon">
        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
    </div>
</footer>


</body>
</html>
