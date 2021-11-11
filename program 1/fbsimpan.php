<?php

include "connect.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"insert into penduduk_baru set
    nik = '$_POST[nik]',
    nokk = '$_POST[nokk]',
    nama = '$_POST[nama]',
    tempat = '$_POST[tempat]',
    lahir = '$_POST[lahir]',
    jekel = '$_POST[jk]',
    agama = '$_POST[agama]',
    asal = '$_POST[asal]',
    baru = '$_POST[baru]'
    ");

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Berhasil Disimpan</title>
        <style>
        


        @import "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css";

        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        .container {
            width: 600px;
            height: 200px;
            margin: auto;
            text-align: center;
            font-family: "poppins", sans-serif;
}
        </style>
    </head>
    <body>
        <div class="container">
        <h1>Data Tersimpan</h1>
        <a href="surketpenduduk.php">Cetak menjadi Surat Keterangan</a>
        </div>
    </body>
    </html>
    
    ';
}
else {
    echo "data gagal";
}

?>
