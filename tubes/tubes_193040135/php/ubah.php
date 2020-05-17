<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

//ambil id dari url
$no = $_GET['no'];

//cari query mahasiswa berdasarkan id
$brg = query("SELECT * FROM apparel WHERE no = $no");

// cek apakah tombol ubahh sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
    alert('Data Gagal diubah!');
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
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- my CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- icon -->

  <link rel="icon" href="../assets/logo/Logo.png">
  <title>Form Ubah</title>
</head>

<body style="background: -webkit-linear-gradient(bottom, royalblue, lightgreen); color:black;">
  <div class="kotak_ubah">
    <div class="content">
    </div>
    <h3 style="text-align:center; ">Form Ubah Data Apparel</h3>
    <div class="underline-title-ubah"></div>
    <form action="" method="POST" enctype="multipart/form-data">
      <ul>
        <li>
          <input type="hidden" name="no" id="no" value="<?= $brg['no']; ?>">
        </li>
        <li>
          <input type="hidden" name="foto_lama" id="foto" value="<?= $brg['foto']; ?>">
          <label for="foto">Foto :</label><br>
          <input type="file" name="foto" id="foto" class="foto form-content" onchange="previewFoto()"><br><br>
          <img src="../assets/img/<?= $brg['foto']; ?>" width="120" style="display: block" class="img-preview">
        </li>
        <li>
          <label for="nama_barang">Nama Barang :</label><br>
          <input type="text" name="nama_barang" id="nama_barang" required value="<?= $brg['nama_barang']; ?>"><br><br>
        </li>
        <li>
          <label for="kantor_utama">Kantor Utama :</label><br>
          <input type="text" name="kantor_utama" id="kantor_utama" required value="<?= $brg['kantor_utama']; ?>"><br><br>
        </li>
        <li>
          <label for="warna">Warna :</label><br>
          <input type="text" name="warna" id="warna" required value="<?= $brg['warna']; ?>"><br><br>
        </li>
        <li>
          <label for="harga">Harga :</label><br>
          <input type="text" name="harga" id="harga" required value="<?= $brg['harga']; ?>"><br><br>
        </li>
        <li>
          <label for="merk">Merk :</label><br>
          <input type="text" name="merk" id="harga" required value="<?= $brg['merk']; ?>"><br><br>
        </li>
        <li>
          <input type="hidden" name="logo_merk_lama" id="logo_merk" value="<?= $brg['logo_merk']; ?>">
          <label for="logo_merk">Logo :</label><br>
          <input type="file" name="logo_merk" id="logo_merk" class="logo_merk form-content" onchange="previewLogo()">
          <img src="../assets/logo/<?= $brg['logo_merk']; ?>" width="120" style="display: block" class="img-previews">
          <br>
          <button type="submit" name="ubah" class="tombol_login" style="margin-top: -5px; margin-left:5px;">Ubah Data</button>
          <button type="submit" class="tombol_login">
            <a href="admin.php" style="text-decoration: none; color:black" class="disini">Kembali</a>
          </button>
      </ul>
    </form>

    <script src="../js/materialize.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>