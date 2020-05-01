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

// membuat php cari
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $apparel = query("SELECT * FROM apparel WHERE
              nama_barang LIKE '%$keyword%' OR
              kantor_utama LIKE '%$keyword%' OR
              warna LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' OR
              merk LIKE '%$keyword%' ");
} else {
  $apparel = query("SELECT * FROM apparel");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tugas</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="add">
    <a class="link" href="tambah.php">Tambah Data</a>
  </div>
  <form action="" method="get">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>opsi</th>
      <th>Gambar</th>
      <th>Nama Barang</th>
      <th>Kantor Utama</th>
      <th>warna</th>
      <th>harga</th>
      <th>merk</th>
      <th>Logo Merk</th>
    </tr>
    <?php if (empty($apparel)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
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

          <td><img src="../assets/img/<?= $brg['foto']; ?>" alt=""></td>
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
  </table>
  <div>
    <a href="logout.php" class="logout">Logout</a>
  </div>
</body>

</html>