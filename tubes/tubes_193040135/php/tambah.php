<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
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
  <title>Tambah</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="icon" href="../assets/logo/Logo.png">
</head>

<body style="background: -webkit-linear-gradient(bottom, royalblue, lightgreen); color:black;">
  <div class="kotak_tambah">
    <div class="content">
      <h3 class="tulisan_login">Form Tambah Data Apparel</h3>
      <div class="underline-title-tambah"></div>
    </div>
    <form action="" method="POST" class="login" enctype="multipart/form-data">
      <ul>
        <li>
          <label for="foto">Foto :</label><br>
          <input type="file" name="foto" id="foto" class="foto form-content" onchange="previewFoto()"><br><br>
          <img src="../assets/img/no-image.png" width="120" style="display: block" class="img-preview">
        </li>
        <li>
          <label for="nama_barang">Nama Barang :</label><br>
          <input type="text" name="nama_barang" id="nama_barang" class="form-content" required><br><br>
          <div class="form-border"></div>
        </li>
        <li>
          <label for="kantor_utama">Kantor Utama :</label><br>
          <input type="text" name="kantor_utama" id="kantor_utama" class="form-content" required><br><br>
          <div class="form-border"></div>
        </li>
        <li>
          <label for="warna">Warna :</label><br>
          <input type="text" name="warna" id="warna" class="form-content" required><br><br>
          <div class="form-border"></div>
        </li>
        <li>
          <label for="harga">Harga :</label><br>
          <input type="text" name="harga" id="harga" class="form-content" required><br><br>
          <div class="form-border"></div>
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
          <input type="file" name="logo_merk" id="logo_merk" class="logo_merk form-content" onchange="previewLogo()">
          <img src="../assets/img/no-image.png" width="120" style="display: block" class="img-previews">
        </li>
        <br>
        <button type="submit" name="tambah" class="tombol_login" style="color: black">Tambah Data</button>
        <button type="submit" class="tombol_login">
          <a href="admin.php" style="text-decoration: none; color:black" class="disini">Kembali</a>
        </button>
      </ul>
    </form>

    <script src="../js/script.js"></script>
</body>

</html>