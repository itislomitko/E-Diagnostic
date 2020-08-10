<?php
include'functions.php';
//if(empty($_SESSION['login']))
    //header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>SIPA ISPA</title>
    <link href="assets/css/yeti-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <link href="assets/css/select2.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="favicon.ico" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>    
    <script src="assets/js/select2.min.js"></script>   
    <script type="text/javascript">
      $(function(){
        $("select:not(.default)").select2();
      })         
    </script>   
    <style type="text/css">
      .coeg{
        border-radius: 15px;
        border: 2px solid #000;
      }
    .hi{
background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('back.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
.dark{
  background-color: #c4413d;
  color: #fff;
}
    </style>              
  </head>
  <body>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?"><span class="glyphicon glyphicon-home"></span> Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php if($_SESSION['login']):?>
            <li><a href="?m=diagnosa"><span class="glyphicon glyphicon-folder-close"></span> Penyakit</a></li>
            <li><a href="?m=gejala"><span class="glyphicon glyphicon-tasks"></span> Gejala</a></li>
            <li><a href="?m=relasi"><span class="glyphicon glyphicon-book"></span> Nilai Bobot</a></li>    
            <li><a href="?m=rule"><span class="glyphicon glyphicon-refresh"></span> Aturan</a></li>
			<li><a href="?m=laporan"><span class="glyphicon glyphicon-file"></span> Laporan</a></li>
            <li><a href="?m=password"><span class="glyphicon glyphicon-cog"></span> Password</a></li>
            <li><a href="aksi.php?act=logout" onclick="return confirm('Yakin Mau Logout ?');"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
            <?php else:?>
			<li><a href="?m=biodata"><span class="glyphicon glyphicon-hand-up"></span> Konsultasi</a></li>
            <li><a href="?m=artikel"><span class="glyphicon glyphicon-info-sign"></span> Artikel</a></li>
            <li><a href="?m=tentang"><span class="glyphicon glyphicon-user"></span> Tentang</a></li>
			<li><a href="?m=login"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>

            <?php endif?>                     
          </ul>          
        </div>
      </div>
    </nav>
    <div>
    <div class="container">
    <?php
        if(!$_SESSION['login'] && in_array($mod, array('diagnosa', 'gejala', 'relasi', 'rule', 'password')))
          $mod='home';

        if(file_exists($mod.'.php'))
            include $mod.'.php';
        else
            include 'home.php';
    ?>
  </div>
    </div>
    <footer class="footer dark">		
      <div class="container" style="text-align:center";>
        <p>Copyright &copy; 2019 Teuku Feraldy Ramadhani</p>
      </div>
    </footer>
  </body>
</html>