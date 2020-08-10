<?php 
include "functions.php";
	
# Baca variabel Form (If Register Global ON)
$nama 	= $_REQUEST['nama'];
$umur 	= $_REQUEST['umur'];
$kelamin = $_REQUEST['kelamin'];
$alamat	= $_REQUEST['alamat'];

# Validasi Form
if (trim($nama)=="") {
	include "isidata.php";
	echo "Nama belum diisi, ulangi kembali";
}
elseif (trim($umur)=="") {
	include "isidata.php";
	echo "Umur masih kosong, ulangi kembali";
}
elseif (trim($alamat)=="") {
	include "isidata.php";
	echo "Alamat masih kosong, ulangi kembali";
}
else {
    $NOIP = $_SERVER['REMOTE_ADDR'];
	$sqldel = "DELETE FROM tb_pasien";
	mysql_query($sqldel, $koneksi);
	
	$sql  = " INSERT INTO tb_pasien (nama,umur,kelamin,alamat) 
		 	  VALUES ('$nama','$umur','$kelamin','$alamat',NOW())";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error 2".mysql_error());
	
	$sqlhapus = "DELETE FROM tb_pasien";
	mysql_query($sqlhapus, $koneksi) 
			or die ("SQL Error 1".mysql_error());
	
	$sqlhapus2 = "DELETE FROM tb_pasien";
	mysql_query($sqlhapus2, $koneksi) 
			or die ("SQL Error 2".mysql_error());
			
	$sqlhapus3 = "DELETE FROM tb_pasien";
	mysql_query($sqlhapus3, $koneksi) 
			or die ("SQL Error 3".mysql_error());
	
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=start'>";
}
?>
