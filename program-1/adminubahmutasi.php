<?php
include "connect.php";
$mysqli_query=mysqli_query($koneksi, "select * from mutasi_penduduk where nik ='$_GET[nik]'");
$data = mysqli_fetch_array($mysqli_query);
?>


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
    <form method="post" action="adminubah.php">
    <div class="header">
    <h1>Edit</h1>
    </div>

    <div class="form">
    <div class="contens">
            <label for="judul">
                <div class="header-form">
                    <span class="form-build">NIK</></span>
                    <span class="star">*</span>
                    <br>
                </div>

                <div class="textbox">   
                    <input type="text" name="nik" class="form-contens" value="<?php echo $data['nik']; ?>">
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
                    <input type="text" name="nokk" class="form-contens" value="<?php echo $data['nokk']; ?>">
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
                    <input type="text" name="nama" class="form-contens" value="<?php echo $data['nama']; ?>">
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
                    <input type="text" name="tempat" class="form-contens" value="<?php echo $data['tempat']; ?>">
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
                    <input type="date" name ="lahir" class="date" value="<?php echo $data['lahir']; ?>">
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
                    <input type="text" name="asal" class="form-contens" value="<?php echo $data['asal']; ?>">
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

 if(isset($_GET['simpan'])) {
 mysqli_query($koneksi, "update mutasi_penduduk set
 nokk = '$_POST[nokk]',
 nama = '$_POST[nama]',
 tempat = '$_POST[tempat]',
 lahir = '$_POST[lahir]',
 jekel = '$_POST[jk]',
 agama = '$_POST[agama]',
 asal = '$_POST[asal]',
 baru = '$_POST[baru]'
 where nik = '$_GET[nik]'");

  echo "data terubah";
  echo "<meta http-equiv=refresh content=1;URL='adminmutasi.php'>";
 };

//  else {
//      echo "gagal";
//  };
 ?>