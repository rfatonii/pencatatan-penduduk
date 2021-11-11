<?php
 
  
  session_start();

  $kon = mysqli_connect("localhost","root","","pencatatan_db");

  //cek login
  if(isset($_POST['updatedata'])) {
      $nikbaru = $_POST['updatenik'];
      $nokkbaru = $_POST['updatenokk'];
      $namabaru = $_POST['updatenama'];
      $tempatbaru = $_POST['updatetempat'];
      $alamatbaru = $_POST['updatealamat'];

      $cekdatabase = mysqli_query($kon, "update penduduk_baru set 
      nokk = '$nokkbaru',
      nama = '$namabaru',
      tempat = '$tempatbaru',
      baru = '$alamatbaru' where nik = '$nik'");


      if($cekdatabase){
          echo "datamasuk";
          header('location:baru.php');
      }
      else {
          header('location:mutasi.php');
      };
  };


  if(isset($_POST['hapusdata'])){
      $nik = $_POST['nik'];

      $hapus = mysqli_query($conn, "delete from penduduk_baru where nik = '$nik'");
      if($hapus){
          header('location:baru.php');
      }
      else {
        header('location:baru.php');
    };
  }

?>