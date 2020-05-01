<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
    alert('Data Gagal ditambahkan!');
    document.location.href = 'admin.php';
</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body style="background: -webkit-linear-gradient(bottom, royalblue, lightgreen); color:black;">
  <div class="kotak_login">
    <div class="content">
      <div class="underline-title"></div>
    </div>
    <h3>Form Tambah Data Apparel</h3>
    <form action="" method="post">
      <ul>
        <li>
          <label for="foto">Foto :</label><br>
          <input type="text" name="foto" id="foto" required><br><br>
        </li>
        <li>
          <label for="nama_barang">Nama Barang :</label><br>
          <input type="text" name="nama_barang" id="nama_barang" required><br><br>
        </li>
        <li>
          <label for="kantor_utama">Kantor Utama :</label><br>
          <input type="text" name="kantor_utama" id="kantor_utama" required><br><br>
        </li>
        <li>
          <label for="warna">Warna :</label><br>
          <input type="text" name="warna" id="warna" required><br><br>
        </li>
        <li>
          <label for="harga">Harga :</label><br>
          <input type="text" name="harga" id="harga" required><br><br>
        </li>
        <li>
          <label for="merk">Merk :</label><br>
          <select name="merk" id="merk" required>
            <option value="">--------------- Pilih Merk ---------------</option>
            <option value="Phillip Works">Phillip Works</option>
            <option value="Vetements">Vetements</option>
            <option value="Yves Saint Laurent">Yves Saint Laurent</option>
            <option value="Mango Man">Mango Man</option>
            <option value="Billionaire Boys Club">Billionaire Boys Club</option>
            <option value="Superdry">Superdry</option>
            <option value="Quiksilver">Quiksilver</option>
            <option value="Air Jordan">Air Jordan</option>
            <option value="Converse">Converse</option>
          </select>
        </li>
        <li>
          <label for="logo_merk">Logo :</label><br>
          <input type="text" name="logo_merk" id="logo_merk" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data</button>
        <button type="submit">
          <a href="../index.php" style="text-decoration: none; color:black" class="disini">Kembali</a>
        </button>
      </ul>
    </form>
</body>

</html>