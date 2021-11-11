<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css">
    <link rel ="stylesheet" href="daftar1.css">
    <title>Daftar</title>
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
<form method="post" action="simpandaftar.php">
        <div class="register">

            <div class="headerregister">
                <h2>Daftar</h2>
            </div>

            <div class="contensregister">

            

            <div class="noflex">
            <div class="contens">
                    <label for="judul">
                        
                        <div class="textbox emailbox">
                            <input type="text" name ="email" class="form-contens" placeholder="Email">
                        </div>

                    </label>
            </div>
            </div>  

            <div class="flex1">
            <div class="contens">
                    <label for="judul">
                        
                        <div class="textbox">
                            <input type="text" name ="username" class="form-contens" placeholder="Username">
                        </div>

                    </label>
            </div>
            
            <div class="contens right">
                    <label for="judul">
                        
                        <div class="textbox">
                            <input type="text" name ="no_hp" class="form-contens" placeholder="No. Hanphone">
                        </div>

                    </label>
            </div>
            </div>

            <div class="flex1">
            <div class="contens">
                    <label for="judul">
            
                        <div class="textbox">
                            <input type="password" name="pass" class="form-contens" placeholder="Password">
                        </div>

                    </label>
            </div>

            <div class="contens right">
                    <label for="judul">
            
                        <div class="textbox">
                            <input type="password"
                             name ="con_pass"  class="form-contens" placeholder="Konf. Password">
                        </div>

                    </label>
            </div>
            </div>

            </div>

        <div class="reg">

            <div class="sreg">
                <input type ="submit" value="Sign Up" name="simpan" class="bottom">
            </div>

        </div>
</form>

    


<script src ="libraries/bootstrap/js/bootstrap.js"></script>
    
</body>
</html>

