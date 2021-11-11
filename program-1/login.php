<?php
    require "connect.php";
    session_start();

    //cek login
    if(isset($_POST['masuk'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];


        $cekdatabase = mysqli_query($koneksi, "select * from daftar where email ='$email' and password ='$password'");

        $hitung = mysqli_num_rows($cekdatabase);

        if($hitung>0){
            $_SESSION['log'] = 'True';
            header("location:datapenduduk.php");

            mysqli_query($koneksi,"insert into login set
            email = '$_POST[email]',
            password = '$_POST[password]'
            ");
        }
        else {
            header("location:login.php");
        };
    };

    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>
<body>

<header>

        <div class="nyatu">
            <div class="logo">
                <img src="png/logoKlapanunggal.png">
            </div>
        </div>

</header>

         <div class="page">
        
            <h1><b>Website Resmi Desa Cikahuripan<br>Kecamatan Klapanunggal</b></h1>
                
        </div>
       

<form method="post">
    <div class="login">
        <div class="login1">

                <div class="headerlogin">
                    <h2>Sign In</h2>
                </div>

                <div class="contens">
                    <label for="judul">
                        
                        <div class="textbox">
                            <input type="text" name="email" class="form-contens" placeholder="Email">
                        </div>
                    </label>
                </div>

                <div class="contens">
                    <label for="judul">

                <div class="textbox">   
                    <input type="password"  name="password" class="form-contens" placeholder="Password">
                </div>
            </label>
        </div>

        <div class="signin">
            <div class="slogin">
               <input type ="submit"  value="Sign In" name ="masuk" class="bottom">
            </div>

            <p>Belum punya akun? 
                <a href="daftar.php">Daftar</a>
            </p>
        </div>  

        </div>
        </div>

</form>
         
    </div>

<script src ="libraries/bootstrap/js/bootstrap.js"></script>
    
</body>
</html>

    <!-- <div class="btn">
            <div class="btn-end">
                <a href="#" class="bottom">Masuk</a>
            </div>

        </div> -->