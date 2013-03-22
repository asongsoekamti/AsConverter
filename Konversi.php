<?php
error_reporting(0);
/*
 Keterangan
 ============================
 * File     : Konversi.php
 * Fungsi   : modul konversi
 * Author   : Asong_Soekamti (Andreas BKH)
 ============================
 */
if(isset($_POST['submit1'])){
$decimal=$_REQUEST['decimal'];
    if(isset($_POST['pilih'])){
        $pilih=$_REQUEST['pilih'];
    }
    else{
        $pilih='';
    }
}
else{
    $decimal='';
    $pilih='';
}
?>
<html>
<head><title></title>
        <style type="text/css">
            body{
                background-image: url('JatimCrew.jpg');
            }
            .color{
                color: silver;
                text-shadow:4px 0px 7px lightblue;
                font-weight:bold;
            }
            .bunshin{
                text-shadow:6px 0px 10px lightblue;
                font-weight:bold;
                color:white;
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
                box-shadow:0px 0px 40px lightblue, inset 1px 1px 0px;
				color: white;
            }
            .shadow{
                text-shadow:4px 0px 7px red;
                font-weight:bold;
                color:white;
            }
            h5{
                text-shadow:6px 0px 10px lightblue;
                font-weight:bold;
				font-size:17;
                color:white;
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
				background:none repeat scroll 0% 0% padding-box rgba(255,50,50,0.6);
			}
			.tombol a {
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
				text-decoration: none;
			}

			.tombol a:hover {
				/* text-shadow: 1px 1px 1px #000; */
				text-decoration: none;
				background:url(tombol-hov.png) no-repeat;
			}
        </style>
		

</head>
<body>
 
    <h2 class="color">
Zona Konversi Bilangan....</h2>
<table border="0" align ="center">
<tr>
    <td align ="center">
    <!-- Proses Pilih Gender dari file validasi.php -->
    <?php
        if(isset ($_POST['submit'])){
            $nama=$_REQUEST['nama'];
            if(isset($_POST['gender'])){
                $gender=$_REQUEST['gender'];
            }
            else{
                $gender='';
            }
        }
        if(isset ($_POST['submit'])){
        if($nama==''|| $gender==''){
            echo"<script>
                 alert('Maaf data yang anda masukkan kurang lengkap ? Isi Nama dan Jenis Kelamin terlebih dahulu');
                 document.location.href='validasi.php';
                 </script>";
        }
        else{
            //cek jenis kelamin
            if($gender=='L'){
                echo"<br><h1 class='bunshin'>
Selamat Datang Bang, $nama !!</h1><h5>di Asong Convertion</h5>
";
                
            }
            else{
                echo"<br><h1 class='bunshin'>
Selamat Datang Neng Geulis, $nama !!</h1><h5>--== Asong Konverter ==--</h5>
";
            }
        }
        }
    ?>
    <!-- End Proses Pilih Gender dari file validasi.php -->
    </td>
    </tr>
</table>
<fieldset>
            <legend>AsongConverter_Apps</legend>
    <table border="0" align ="center" class='shadow'>
<tr> 
    <td align ="center">
    <p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
"
          method="POST" name="form1">
        <h2>
 Tuliskan nilai bilangan Desimal nya : </h2>
<input class='klik' placeholder="Isikan dengan Bilangan Desimal" required="required" type="text" name="decimal" size ="28" value="<?php echo $decimal ?>"/><br>
        <h2>
 Pilih salah satu Konversi : <br>
        <input type="radio" name="pilih" value="B"
               <?php ($pilih=="B")? print 'checked=""' : print ''; ?>/>
        Biner<br>
        <input type="radio" name="pilih" value="H"
               <?php ($pilih=="H")? print 'checked=""' : print ''; ?>/>
        Hexa<br>
         <input type="radio" name="pilih" value="O"
               <?php ($pilih=="O")? print 'checked=""' : print ''; ?>/>
        Oktal<br>
        </h2>
<center>
<input type="submit" class="tombol" name="submit1" value="Convert"><br>
<center>

    </form>
    <!-- Proses Konversi -->
        <?php
        if(isset($_POST['submit1'])){//apakah data tersebut tersubmit
        $decimal=$_REQUEST['decimal'];
            if(isset($_POST['pilih'])){
                $pilih=$_REQUEST['pilih'];
            }   
            else{
                $pilih='';
            }
        }
        else{
            $decimal='';
            $pilih='';
        }
        if(isset ($_POST['submit1'])){
        if($decimal==''|| $pilih==''){
            echo"<script>alert('Maaf anda kurang dalam melakukan prosedur pengisian data! Isi nilai Desimal dan pilih ke Biner, Hexa mupun Oktal terus tekan Convert !!')</script>";
        }
        else{
            if($pilih=='B'){
            //Konversi ke Biner
            if (isset($_POST['decimal'])) {
                $decimal = $_POST['decimal'];
                $original = $_POST['decimal'];
                $binary = '';
                if (preg_match('/[^0-9]/',$decimal)) {
                        die ("Maaf. Yang anda masukkan salah, yang betul isian adalah angka...!!!");
                }
                else {
                    while ($decimal > 0) {
                        if ($decimal%2 == 0) {
                            $binary .= 0;
                            $decimal /= 2;
                        }
                        else {
                            $binary .= 1;
                            $decimal = ($decimal/2)-0.5;
                        }
                    }
                    $result = strrev($binary);
                    echo "<br><h2>
Bilangan desimal $original. Jika dijadikan Biner hasilnya adalah $result.</h2>
";
                    }
                }
                else {

                }
            }
            else{
                    if($pilih=='H'){
                    //Konversi ke Hexa
    $self = $_SERVER['PHP_SELF'];
       if(isset($_POST['decimal'])){//apakah data tersebut tersubmit
          $des = $_POST['decimal'];
          $original = $_POST['decimal'];
          $hex='';
            if(preg_match('/[^0-9]/',$des)){//memastikan inputan bukan char ataupun huruf melainkan angka, kalau perlu ditambahi regex biar lebih valid.
                die("Maaf yang anda masukkan salah, mohon masukkan angka..");
  }
        else {
          while($des>0){
               $hasil=$des%16;
switch($hasil){
          case 0: $hex.="0"; break;
          case 1: $hex.="1"; break;
          case 2: $hex.="2"; break;
          case 3: $hex.="3"; break;
          case 4: $hex.="4"; break;
          case 5: $hex.="5"; break;
          case 6: $hex.="6"; break;
          case 7: $hex.="7"; break;
          case 8: $hex.="8"; break;
          case 9: $hex.="9"; break;
          case 10: $hex.="A"; break;
          case 11: $hex.="B"; break;
          case 12: $hex.="C"; break;
          case 13: $hex.="D"; break;
          case 14: $hex.="E"; break;
          case 15: $hex.="F";
          default:break;
}
      if($des/16==0){
         $sisa=($des%16);
         $des=$sisa;
}
     else if ($des/16 >= 16) {
          $sisa = ($des/16);
          $des = $sisa;
}
else{
    $sisa=($des/16);
    $des=$sisa%16;
}
}
       }
					$result = strrev($hex);
                                    echo "<br><h2>
Bilangan desimal $original. Jika dijadikan Hexadecimal hasilnya adalah $result.</h2>
";
                        }
                    }
                    else{
                        //Konversi ke Oktal
                         if(isset($_POST['decimal'])){
                         $des=$_POST['decimal'];
                         $original=$_POST['decimal'];
                         $octal='';
                         while ($des>0){
                         $hasil=$des%8;
                         switch($hasil){
                         case 0 : $octal.="0"; break;
                         case 1 : $octal.="1"; break;
                         case 2 : $octal.="2"; break;
                         case 3 : $octal.="3"; break;
                         case 4 : $octal.="4"; break;
                         case 5 : $octal.="5"; break;
                         case 6 : $octal.="6"; break;
                         case 7 : $octal.="7";
                         default:break;
                         }
                         if($des/8>0){
                            $sisa=($des/8);
                            $des=$sisa%8;
                            }
                            else{
                            $sisa=($des%8);
                            $des=$sisa;
                            }}
                            $result = strrev($octal);
                            echo "<br><h2>
Bilangan desimal $original. Jika dijadikan Oktal hasilnya adalah $result.</h2>
";
                            }
                            else{

                            }
                    }
            }
        }
        }
        echo "<br><center>
<div class='tombol'><a href='validasi.php'>RESET</a></div></center>

<br>";
        ?>
    <!-- End proses Konversi -->
    </td>
    </tr>
</table>
</fieldset>
</body>
</html>
