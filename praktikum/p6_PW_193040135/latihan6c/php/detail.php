<?php 
	// mengecek apakah ada id yang dikirimkan
	// jika tidak maka akan dikembalikan ke halaman index.php
	if (!isset($_GET['no'])) {
		header("location: ../index.php");
		exit;
	}

	require 'functions.php';

	// mengambil id dari url
	$no = $_GET['no'];

	// melakukan query dengan parameter
	$apparel = query("SELECT * FROM apparel WHERE no = $no")[0];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="../css/style.css">
 </head>
 <body>
 	<div class="container">
 		<div class="img">
 			<img src="../assets/img/<?= $apparel["foto"]; ?>" alt="">
 		</div>
 		<div class="keterangan">
 			<p><?= $apparel["nama_barang"]; ?></p>
 			<p><?= $apparel["kantor_utama"]; ?></p>
 			<p><?= $apparel["warna"]; ?></p>
 			<p><?= $apparel["harga"]; ?></p>
 			<p><?= $apparel["merk"]; ?></p>
 		</div>
 		<div class="img">
 			<img src="../assets/logo/<?= $apparel["logo_merk"]; ?>" alt="">
 		</div>
 		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
 	</div>
 	
 </body>
 </html>