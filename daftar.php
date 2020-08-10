<?php 
 require_once 'functions.php';
    
    $nama =$_POST['nama'];
    $umur =$_POST['umur'];
    $jk=$_POST['jk'];
    $alamat =$_POST['alamat'];
    $tgl =$_POST['tgl'];
    
    
    
    $db->query("INSERT INTO tb_hasil(nama,umur,jk,alamat,tgl) VALUES('$nama','$umur','$jk','$alamat','$tgl')");
	
	echo "<meta http-equiv='refresh' content='0; url=aksi.php?m=konsultasi&act=new'>";
?>

