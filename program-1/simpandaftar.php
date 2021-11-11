<?php

//cara pertama :
    // $email = $_POST['email'];
    // $username = $_POST['username'];
    // $nohp = $_POST['no_hp'];
    // $pass = $_POST['pass'];
    // $conpass = $_POST['con_pass'];

    // include "koneksi.php";

    // mysql_query("insert into daftar(email,handphone, username,password,conpassword) values ('$email','$nohp,'$username','$pass','$conpass')") or die("penyimpananan gagal");



    include "connect.php";

    if(isset($_POST['simpan'])){
        mysqli_query($koneksi,"insert into daftar set
        email = '$_POST[email]',
        handphone = '$_POST[no_hp]',
        username = '$_POST[username]',
        password = '$_POST[pass]',
        conpassword = '$_POST[con_pass]'
        ");

        echo "<h1>data tersimpan</h1>
        <a href='login.php'>Login?</a>";
    }
    else {
        echo "data gagal";
    }

?>