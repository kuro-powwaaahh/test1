<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Site</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/query.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style>
    a {color : #7e83d3;}
    h3 {color: #00e6e6;}
    div {color: #7075d8;}
    span {color: #000000;}
  </style>
</head>
<body style="background-color: black;">
  <br><br>
  <div id="logo">
    <a href="/">
      <img src="header.jpg" height="300px">
      <br>
    </a>
  </div>
  <nav class="navbar mainmenu-area" data-spy="affix" data-offset-top="197">
    <div class="container">
      <div class="navbar-header smoth">
        <a class="navbar-brand"></a>
      </div>
      <div class="col-sm-10 col-sm-offset-2 collapse navbar-collapse navbar-center" id="header">
        <ul class="nav navbar-nav primary-menu">
          <li class="active"><a href="index.php?halaman=beranda`">Beranda</a></li>
          <li><a href="index.php?halaman=profilku">Profilku</a></li>
          <li><a href="index.php?halaman=kontak">Kontak</a></li>
          <li><a href="index.php?halaman=daftar">Daftar Kontak</a></li>
          <li><a href="index.php?halaman=multimedia">Multimedia</a></li>
          <li><a href="index.php?halaman=koneksi">Tes Koneksi</a></li>
          <li><a href="form_login.php">Log Out</a></li>
        </ul>
      </div>
      <div class="col-sm-12" style="background-color: #7e83d3; height: 3px">
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 text-center">
      <br>

      <div id="content">
        <?php include "menubar.php"; // Load file config.php ?>
      </div>
      <br>

      <span class="col-sm-12" style="background-color: #7e83d3;" id="footer">
        &copy; 2019 - Kuro_Yori_Mo_Kurai
      </span>
    </div>
  </div>
</body>
</html>
