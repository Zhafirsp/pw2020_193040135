<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$no = $_GET['no'];
$brg = query("SELECT * FROM apparel WHERE no = $no")[0];

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
  <title>Document</title>
</head>

<body>
  <h3>Form Ubah Data Apparel</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <input type="hidden" name="no" id="no" value="<?= $brg['no']; ?>">
      </li>
      <li>
        <label for="foto">Foto :</label><br>
        <input type="text" name="foto" id="foto" required value="<?= $brg['foto']; ?>"><br><br>
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
        <select name="merk" id="merk" required value="<?= $brg['merk']; ?>">
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
        <label for="logo_merk">Logo Merk :</label><br>
        <input type="text" name="logo_merk" id="logo_merk" required value="<?= $brg['logo_merk']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color:black">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>