<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambahadmin.css">
    <title>Document</title>
</head>
<body>
<div class="box">
    <form method="post" action="tambahadminmutasi.php">
    <div class="header">
    <h1>Tambah</h1>
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
                    <span class="form-build">Alamat</span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textbox">
                    <input type="text" name ="baru" class="form-contens">
                </div>
            </label>
        </div>

        <!-- <div class="text">
            <p>Pastikan Kembali Data Yang di Isi Sudah Benar!</p>
        </div> -->
        

        <div class="btn">
            <div class="end">
                <input type ="submit" value = "Simpan" name="simpan" class="bottom">
            </div>

            </div>
        </div>
        </div>
        
    </div>
    </form>
</div>
</body>
</html>

<?php
include "connect.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"insert into mutasi_penduduk set
    nik = '$_POST[nik]',
    nokk = '$_POST[nokk]',
    nama = '$_POST[nama]',
    tempat = '$_POST[tempat]',
    lahir = '$_POST[lahir]',
    jekel = '$_POST[jk]',
    agama = '$_POST[agama]',
    alamat = '$_POST[baru]'
    ");

    echo "data terubah";
    echo "<meta http-equiv=refresh content=1;URL='adminmutasi.php'>";
}

?>