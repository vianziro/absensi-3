<?php 
session_start();
error_reporting(0);
include "timeout.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEM INFORMASI KEPEGAWAIAN</title>
<link rel="stylesheet" href="css/style.css" type="text/css"  />
<script src="js/jquery-1.4.js" type="text/javascript"></script>
<script src="js/superfish.js" type="text/javascript"></script>
<script src="js/hoverIntent.js" type="text/javascript"></script>

	<script type="text/javascript">
      $(document).ready(function(){
			   $('ul.nav').superfish();
		  });
  </script>
</head>

<body>
<div id="container">
<div id="header">
<span class="judul">APLIKASI KEPEGAWAIAN</span><br />
<span class="judul2"></span></br>
</div>
<div class="logout"><a href="logout.php"> Logout</a></div>
<div id="menu">
	<ul class="nav">
	<? if ($_SESSION['leveluser']=='3'){ ?>
	<li><a class="border link linkback" href="?module=absensi">Home</a></li>
	<li>
	<a class="border link linkback" href="?module=pegawai&act=detail&id=<?php echo $_SESSION['namauser'];?>">Data Pegawai</a>
	</li>
	<?php 
	if ($_SESSION['leveluser']=='1'){
	?>
    	<li><a class="border link linkback" href="?module=pegawai">Data Pegawai</a>
        	<ul>
            <li><a href="?module=bagian" class="li">Data Bagian</a></li>
            <li><a href="?module=jabatan" class="li">Data Jabatan</a></li>
            </ul>
        </li>
        <li><a class="border link linkback" href="?module=pelatihan">Data Pelatihan</a></li>
        <li><a class="border link linkback" href="?module=kjb">Data Kenaikan Jabatan</a></li>
	<?php } 
	if($_SESSION['leveluser']=='1' or $_SESSION['leveluser']=='2'){
	?>
		<li><a class="border link linkback" href="#">Laporan</a>
        	<ul>
			<li><a href="laporan_pegawai.php" class="li" target="_blank">Laporan Data Pegawai</a></li>
            <li><a href="?module=lap_absensi" class="li">Laporan Data Absensi</a></li>
            <li><a href="laporan_pelatihan.php" target="_blank" class="li">Laporan Data pelatihan</a></li>
			<li><a href="laporan_kjp.php" target="_blank" class="li">Laporan Kenaikan Jabatan</a></li>
            </ul>
        </li>
	<?php } ?>
        <li class="clear"></li>
    </ul>
</div>
<div id="content">
<div class="form">
	<?php include "data.php"; ?>
</div>
</div>
<div id="footer"></div>
</div>
</body>
</html>
