<!--
 Keterangan
 ============================
 * File     : Validasi.php
 * Fungsi   : Halaman awal dan sebagai validasi
 * Author   : Asong_Soekamti (Andreas BKH)
 ============================
-->
<html>
  <head>
		<title>Halaman Login</title>
		<style type="text/css">
            body{
                background-image: url('1.jpg');
            }
            .a{
                text-shadow:6px 0px 10px lightblue;
                font-family:Calibri;
                font-weight:bold;
                color:white;
				
            }
            .b{
                text-shadow:6px 0px 10px red;
                font-weight:bold;
                color:dark;
            }
            form input.klik{
                background: lightblue;
                border-radius:5px;
                padding: 5px;
				box-shadow:0px 0px 40px yellow, inset 1px 1px 0px;
            }
            form input.klik:focus {
                border: solid 1px dark;
                background: black;
                border-radius:5px;
                box-shadow:0px 0px 40px red, inset 1px 1px 0px;
				color: white;
            }
			legend{
			font-size:30;
			color:white;
            text-shadow:2px 0px 7px lightblue;
			}
			legend:hover{
			font-size:30;
			color:black;
            text-shadow:2px 0px 7px red;
			}
			fieldset{
				box-shadow:0px 0px 40px red, inset 1px 1px 0px;
				background:none repeat scroll 0% 0% padding-box rgba(0,0,0,0.6);
			}
			fieldset:hover{
				box-shadow:0px 0px 40px lightblue, inset 1px 1px 0px;
				background:none repeat scroll 0% 0% padding-box rgba(255,255,255,0.4);
			}
.tombol a {
	float: right;
	display: block;
	width: 100px;
	height: 26px;
	margin-top: 10px;
	padding-top: 4px;
	font-size: 12px;
	font-weight: bold;
	color: #a9a9a9;
	text-align: center;
	background:url(tombol.png) no-repeat;
}

.tombol a:hover {
	/* text-shadow: 1px 1px 1px #000; */
	text-decoration: none;
	background:url(tombol-hov.png) no-repeat;
}
        </style>
		<script>
		date = new Date();

if ((date.getUTCHours() - date.getHours()) != 0) (date = date.getHours())

else (date = (8 + date.getHours()));

if (date < 4) {alert("Selamat Malam!")}

else {if (date < 11) {alert("Selamat Pagi,, Selamat Beraktifitas!\n\n\n\nDan selamat datang si site ini :D\n\nRegard: Asong")}

else {if (date < 16) {alert("Selamat Siang!\n\n\n\nDan selamat datang si site ini :D\n\nRegard: Asong")}

else {if (date < 20) {alert("Selamat Sore!\n\n\n\nDan selamat datang si site ini :D\n\nRegard: Asong")}

else {alert("Selamat Malam Semuanya. Jangan bosan-bosan mengunjungi site ini :D\n\n\n\n\nDan selamat datang si site ini :D\n\nRegard: Asong")}

}

}

}



var gx = /Firefox/gi;

if(gx.exec(navigator.userAgent)){

alert("Kamu Pakek FireFox yah?");

alert("Jika iya, saya anjurkan menggunakan Google Chrome saja deh, hehehehe.\n\nChrome Sangat Cepat Dan Stabil :D");

alert("Best Viewed on Chrome....");

alert("Terima kasih ^_^");

//return ngakbisakeluar();

//window.location ="http://www.google.com";

//window.confirm

	var answer = confirm("Mau mencoba Google Chrome??")

	if (answer){

		alert("Jelajahi situs ini dengan cepat melalui Google Chrome :D\n\nBuka Pop-Up agar bisa membuka page Download Google Chrome\n\n\nRgd by Asong\nSee You..")

		window.open("https://www.google.com/chrome/index.html")

	}

	else{

		alert("Ya sudah kami gak memaksa anda untuk menggunakan Chrome, Terima kasih telah browsing di Situs ini Menggunakan Mozilla Firefox")

	}

}

var xx = /Chrome/gi;

if(xx.exec(navigator.userAgent)){

alert("Browser yang anda Gunakan adalah Google Chrome..... :D");

alert("Selamat menikmati tampilan terbaik via Google Chrome :D");

}

		</script>
</head>
<body>
         <h1 class='a'>
<?php error_reporting(0);
echo $cek ?></h1>
<fieldset>
            <legend>Form Login</legend>
<br>
        <form action="Konversi.php" method="post" name="form1">
            <p>
<h3 class='b'>
Nama : <input class='klik' placeholder="Masukkan Namamu" required="required" type="text" name="nama" size ="30" value="<?php error_reporting(0); echo $nama ?>"/></h3>
</p>
<p>
<h3 class='b'>
Apa Jenis Kelamin anda? <br>
                <input type="radio" name="gender" value="L"
                               <?php error_reporting(0); ($gender=="L")? print 'checked=""' : print ''; ?>/>
                Laki-Laki<br>
                <input type="radio" name="gender" value="P"
                       <?php error_reporting(0); ($gender=="P")? print 'checked=""' : print ''; ?>/>
                Perempuan
            </h3>
</p>
<input type="submit" name="submit" value="Login">
        </form>
</fieldset>
</body>
</html>

<?php
error_reporting(0);
if(isset($_POST['submit'])){//apakah data tersebut tersubmit
$nama=$_REQUEST['nama'];
    if(isset($_POST['gender'])){
        $gender=$_REQUEST['gender'];
    }
    else{
        $gender='';
    }
$cek='';
}
else{
    $nama='';
    $gender='';
    $cek='Login dahulu sebelum anda masuk kedalam area Konversi!!! :)';
}
?>
