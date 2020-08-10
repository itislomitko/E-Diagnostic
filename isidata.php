<!DOCTYPE html>
<?php
include "functions.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>SIPA ISPA</title>
    <link href="assets/css/yeti-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <link href="assets/css/select2.min.css" rel="stylesheet"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>    
    <script src="assets/js/select2.min.js"></script>   
    <style type="text/css">
    </style>      
  </head>
<div class="panel panel-default">
  
  <body class="dark hi" >
<div class="page-header">
    <h1 style="color: #fff;">Isi Data Diri Anda</h1>
</div>
<form action="?m=daftar" method="post">
  <div class="form-group" style="width: 400px">
                <p style="color: #fff;" align="left"><b>Nama Lengkap</b> <span class="text-danger">*</span></p>
                <p><input class="form-control" style="width: 400px" type="text" placeholder="Masukkan Nama Lengkap Anda" name="nama" /></p>
  </div>
  <div class="form-group" style="width: 400px">
                <p style="color: #fff;" align="left"><b>Umur</b> <span class="text-danger">*</span></p>
                <input style="color: #000;" class="form-control" type="text" name="umur" required placeholder="Masukkan Umur Anda" />
  </div>

    <div class="form-group" style="width: 400px">
                <p style="color: #fff;" align="left"><b>Jenis Kelamin</b> <span class="text-danger">*</span></p>
               <p align="left"> <input type="radio" name="jk" value="Laki - Laki"><b> Laki - Laki   </b><input type="radio" name="jk" value="Perempuan"><b> Perempuan</b></p>
  </div>

    <div class="form-group" style="width: 400px">
                <p style="color: #fff;" align="left"><b>Alamat</b> <span class="text-danger">*</span></p>
                <input style="color: #000;" class="form-control" type="text" name="alamat" required placeholder="Masukkan Alamat" />
  </div>	
</form>
</div>
</div>