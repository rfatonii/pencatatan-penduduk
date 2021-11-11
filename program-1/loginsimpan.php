<?php

include "connect.php";

if(isset($_POST['masuk'])){
    mysqli_query($koneksi,"insert into login set
    email = '$_POST[email]',
    password = '$_POST[password]'
    ");
}
?>