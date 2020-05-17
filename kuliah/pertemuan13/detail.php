<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa where id = $id");



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>" width="250"></li>
    <li>NRP : <?= $mhs['nrp']; ?></li>
    <li>Nama : <?= $mhs['nama']; ?></li>
    <li>Email : <?= $mhs['email']; ?></li>
    <li>Jurusan : <?= $mhs['jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $mhs['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('apakah anda yakin?')">hapus</a></li>
    <li><a href="index.php">KEMBALI KE DAFTAR MAHASISWA</a></li>
  </ul>

</body>

</html>