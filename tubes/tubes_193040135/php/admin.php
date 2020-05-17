<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
// menghubungkan dengan file php yang lainnya
require 'functions.php';

// melakukan query
$apparel = query("SELECT * FROM apparel");

	//ketika tombol cari di klik
	if (!empty($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$apparel = query("SELECT * FROM apparel WHERE 
              nama_barang LIKE '%$keyword%' OR
              merk LIKE '%$keyword%'");
	} else {
		$apparel = query("SELECT * FROM apparel");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../assets/logo/Logo.png">
  <title>tugas</title>

</head>

<body style="	background-image: url(../assets/img/torus.png); height:20%;	background-position-x: 40px; background-color:black; color:white;">
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="transparent">
      <div class="container">
        <div class="nav-wrapper">
          <a href="../index.php" class="brand-logo"> <i class="material-icons">arrow_back</i></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li>
              <form action="" method="POST">
                <input type="text" name="keyword" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus class="keyword" style="color: white">
                <button type="submit" name="cari" class="tombol-cari">cari</button>
              </form>
            </li>
            <li><a href="../../index.php">Home</a></li>
            <li><a class="link" href="tambah.php">Tambah Data</a>
            <li>
            <li><a href="logout.php" class="logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- sidenav -->
  <ul class="sidenav black" id="mobile-nav">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="../assets/img/z.jpg">
        </div>
        <a href="#user"><img class="circle rounded" src="../assets/img/as.png"></a>
        <a href="#name"><span class="white-text name">Muhammad Zhafir Sunandy Pramana</span></a>
        <a href="#email"><span class="white-text email">zhafirsp@gmail.com</span></a>
      </div>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">home</i></a>
    </li>
    <li><a href="../../index.php" class="white-text">Home</a></li>
    <li><a class="link white-text" href="tambah.php">Tambah Data</a>
    <li>
    <li><a href="logout.php" class="logout white-text">Logout</a></li>
    <li>
      <form action="" method="GET">
        <input type="text" name="keyword" placeholder="Search" autocomplete="off" autofocus class="keyword" style="color: white">
        <button type="submit" name="cari" class="tombol-cari">cari</button>
      </form>
    </li>
  </ul>
  <table cellpadding="13" cellspacing="0" class="responsive-table highlight;">
    <thead>
      <tr>
        <th>No</th>
        <th>opsi</th>
        <th>Gambar</th>
        <th>Nama Barang</th>
        <th>Kantor Utama</th>
        <th>warna</th>
        <th>harga</th>
        <th>merk</th>
        <th>Logo Merk</th>
      </tr>
    </thead>
    <tbody>
    <div class="big">
      <?php if (empty($apparel)) : ?>
        <tr>
          <td colspan="7">
            <h1 style="color : red; font-style: italic;">Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($apparel as $brg) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <div class="update"><a href="ubah.php?no=<?= $brg['no'] ?>"><button>Ubah</button></a></div>
              <div class="delete"><a href="hapus.php?no=<?= $brg['no'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a></div>
            </td>
            <td><img src="../assets/img/<?= $brg['foto']; ?>" class="materialboxed" width="650px;"></td>
            <td><?= $brg["nama_barang"]; ?></td>
            <td><?= $brg["kantor_utama"]; ?></td>
            <td><?= $brg["warna"]; ?></td>
            <td><?= $brg["harga"]; ?></td>
            <td><?= $brg["merk"]; ?></td>
            <td><img src="../assets/logo/<?= $brg['logo_merk']; ?>" alt=""></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      </div>
    </tbody>
  </table>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>