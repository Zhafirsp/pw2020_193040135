<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>


      <tr>
        <td><?= $i++ ?></td>
        <td>
          <img src="img/<?= $mhs["gambar"] ?>" width="60px">
        </td>
        <td>
          <?= $mhs["nama"] ?>
        </td>
        <td>
          <a href="detail.php?id=<?= $mhs["id"] ?>">
            <button>Lihat Detail</button>
          </a>
        </td>
      </tr>

      </tr>
    <?php endforeach; ?>
  </table>
  <a href="../../index.php">Home</a>
</body>

</html>