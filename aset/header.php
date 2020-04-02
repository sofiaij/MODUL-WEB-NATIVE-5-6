<?php
session_start();

if(!(isset($_SESSION['id_petugas']))){
	//header("Location: http://localhost/siperpustakaan/login/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/siperpustakaan/aset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/siperpustakaan/aset/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/siperpustakaan/aset/fontawesome-pro/css/all.min.css">
	<title>SiPERPUS</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-book-reader"></i> SiPERPUS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/siperpustakaan/index.php">Dashboard</a>
      <a class="nav-item nav-link" href="http://localhost/siperpustakaan/buku/index.php">Buku</a>
      <a class="nav-item nav-link" href="http://localhost/siperpustakaan/anggota/index.php">Anggota</a>
      <a class="nav-item nav-link" href="http://localhost/siperpustakaan/transaksi/index.php">Peminjaman</a>
      <a class="nav-item nav-link" href="#">Logout</a>
    </div>
  </div>
</nav>

