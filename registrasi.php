

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEM INFORMASI KEPEGAWAIAN</title>
<link rel="stylesheet" href="css/style.css" type="text/css"  />
</head>

<body>
<div id="cont-pegawai">
<?php
include "config/koneksi.php";

include "config/fungsi_indotgl.php";
include "config/class_paging.php";
include "config/kode_auto.php";
include "config/fungsi_combobox.php";
include "config/fungsi_nip.php";

$aksi="modul/pegawai/aksi_pegawai.php";

echo "<h2 class='hd-r'>REGISTRASI PEGAWAI</h2>
	<form action='$aksi?module=pegawai&act=input' method='post' enctype='multipart/form-data' class='f-r' >
	<table class='tabelform tabpad'>
	<tr>
	<td>Nip</td><td>:</td><td><input name='nip' type='text'></td>
	</tr>
	<tr>
	<td>Password Login</td><td>:</td><td><input class='input' name='psl' type='password'></td>
	</tr>
	<tr>
	<td>Nama Pegawai</td><td>:</td><td><input class='input' name='nama' type='text'></td>
	</tr>
	<tr>
	<td>Tempat Lahir</td><td>:</td><td><input class='input' name='tls' type='text'></td>
	</tr>
	<tr>
	<td>Tanggal Lahir</td><td>:</td><td>
	<select name='hari'>
                <option value='none' selected='selected'>Tgl*</option>";
			for($h=1; $h<=31; $h++) 
			{ 
				echo"<option value=",$h,">",$h,"</option>";
			} 
	echo"</select>
	<select name='bulan'>
            	<option value='none' selected='selected'>Bulan*</option>
				<option value='1'>Januari</option>
				<option value='2'>Februari</option>
				<option value='3'>Maret</option>
				<option value='4'>April</option>
				<option value='5'>Mei</option>
				<option value='6'>Juni</option>
				<option value='7'>Juli</option>
				<option value='8'>Agustus</option>
				<option value='9'>September</option>
				<option value='10'>Oktober</option>
				<option value='11'>November</option>
				<option value='12'>Desember</option>
			</select>
	<select name='tahun'>
            <option value='none' selected='selected'>Tahun*</option>";
			$now =  date("Y");
			$saiki = 1965;
			for($l=$saiki; $l<=$now; $l++)
			{
				echo"<option value=",$l,">",$l,"</option>";
			}	
	echo "</select>
	</td>
	</tr>
	
	<tr>
	<td>Jenis Kelamin</td><td>:</td><td><input name='jk' type='radio' value='L' />Pria <input name='jk' type='radio' value='P' />Wanita</td>
	</tr>
	
	<tr>
	<td>Alamat</td><td>:</td><td><textarea name='almt' ></textarea></td>
	</tr>
	
	<tr>
	<td>Tanggal Masuk</td><td>:</td><td>
	<select name='hm'>
                <option value='none' selected='selected'>Tgl*</option>";
			for($h=1; $h<=31; $h++) 
			{ 
				echo"<option value=",$h,">",$h,"</option>";
			} 
	echo"</select>
	<select name='bm'>
            	<option value='none' selected='selected'>Bulan*</option>
				<option value='1'>Januari</option>
				<option value='2'>Februari</option>
				<option value='3'>Maret</option>
				<option value='4'>April</option>
				<option value='5'>Mei</option>
				<option value='6'>Juni</option>
				<option value='7'>Juli</option>
				<option value='8'>Agustus</option>
				<option value='9'>September</option>
				<option value='10'>Oktober</option>
				<option value='11'>November</option>
				<option value='12'>Desember</option>
			</select>
	<select name='tm'>
            <option value='none' selected='selected'>Tahun*</option>";
			$now =  date("Y");
			$saiki = 2000;
			for($l=$saiki; $l<=$now; $l++)
			{
				echo"<option value=",$l,">",$l,"</option>";
			}	
	echo "</select>
	</td>
	</tr>
	
	<tr>
	<td>Bagian</td><td>:</td><td><select name='bagian'>
	<option value='' selected >Pilih Bagian</option>";
	$jab=mysql_query("select * from bagian");
	while($j=mysql_fetch_array($jab)){
	echo "<option value='$j[id_bag]'>$j[n_bag]</option>";
	}
	echo "</select></td>
	</tr>
	
	<tr>
	<td>Jabatan</td><td>:</td><td><select name='jabatan'>	
	<option value='' selected >Pilih Jabatan</option>";
	$jab=mysql_query("select * from jabatan");
	while($j=mysql_fetch_array($jab)){
	echo "<option value='$j[id_jab]'  >$j[n_jab]</option>";
	}
	echo "</select></td>
	</tr>
	
	
	<tr>
	<td>Foto</td><td>:</td><td><input name='fupload' type='file' /></td>
	</tr>
	
	
	<tr>
	<td></td><td></td><td><input type=submit value=Simpan>
	<input type=button value=Batal onclick=self.history.back()>
	</td>
	</tr>
	</table>
	</form>
	"; ?>
</div>
</body>
</html>
