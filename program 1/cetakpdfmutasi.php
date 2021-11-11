<?php
    include "connect.php";
    $ambildata = mysqli_query($koneksi,"select * from mutasi_penduduk");

    ($tampil = mysqli_fetch_array($ambildata));


	$content = '
    <!DOCTYPE html>
    <html>
    <head>
    <style>

    .header {
        margin-bottom: 30px;
    }

    .logo {
        width:80px;
        height: 90px;
        margin: auto;

    }
    .logo img {
        width:80px;
        height: 90px;
        margin: auto;
    }

    .jdl {
        text-align: center;
        border-bottom: 2px solid black;
    }

    .jdl h1 {
        margin-bottom: -20px;
    }

    .jdl p {
        text-align: center;
        margin-top: -6px;
    }

    h4 {
        text-align: center;
    }


    pre {
        font-size: 14px;
    }

    #isi {
        text-align: justify;
    }

    #kd1 {
        text-align: right;
        margin-right: 75px;
        font-size: 14px;
    }
    #kd2 {
       text-align:right;
       margin-right: 40px;
       font-size: 14px;
    }

    #kd3 {
        text-align: right;
        margin-right: 85px;
        font-size: 14px;
    }


    .line {
        width: 600px;
        height: 1px;
        background-color:black;
        margin: auto;
    }

    </style>
    </head>
	<body>
    <div class="header">

    <div class="logo">
    <img src="png/logoklapanunggal.png">
    </div>

    <div class="jdl">
        <h2>KANTOR DESA CIKAHURIPAN KECAMATAN KLAPANUNGGAL KABUPATEN BOGOR</h2>
        <p>Jl. Raya Klapanunggal-Cipeucang No. 1 Cibeber Kode Pos. 16710</p>
    </div>

    </div>

        <h4>SURAT KETERANGAN PINDAH</h4>

     
    
        <pre>


        Kepala Desa Cikahuripan dengan ini menerangkan bahwa :
        </pre>

        <pre>
        NIK	   : '.$tampil['nik'].'

        Nama	  : '.$tampil['nama'].'

        Jenis Kelamin : '.$tampil['jekel'].'

        Tempat Lahir  : '.$tampil['tempat'].'

        Tanggal Lahir : '.$tampil['lahir'].'

        Alamat	: '.$tampil['alamat'].'
        </pre>

        <pre>
        Nama diatas adalah penduduk Desa Cikahuripan Kecamatan Klapanunggal
        Kabupaten Bogor, atas permintaan yang bersangkutan diberikannya Surat
        Keterangan Pindah.

        Demikian surat keterangan ini dibuat dan diberikan kepada yang ber-
        sangkutan untuk dipergunakan sebagaimana mestinya.

        </pre>
        <p id="kd1">Mengetahui,</p>
        <p id="kd2">Kepala Desa Cikahuripan</p>

        <br>
        <br>
        <br>
        <br>

        <p id="kd3">(Andi Upi)</p>


	</body>
	</html>';

	require __DIR__.'/laporan-php-html2pdf/html2pdf_v5.2-master/vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;
	$html2pdf = new Html2Pdf('P','A4','fr', true, 'UTF-8', array(15, 15, 15, 15), false); 
	$html2pdf->writeHTML($content);
	$html2pdf->output();
?>