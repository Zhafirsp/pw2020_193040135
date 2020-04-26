<?php
// menghubungkan dengan file php yang lainnya
require 'functions.php';

// melakukan query
$apparel = query("SELECT * FROM apparel");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 6b</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
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
    <?php $i = 1; ?>
    <?php foreach ($apparel as $brg) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
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
  </table>
</body>

</html>