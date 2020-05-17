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
$apparel = query("SELECT * FROM apparel WHERE no = $no");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Detail</title>
	<!-- my CSS -->
	<link rel="stylesheet" href="../css/style.css">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- icon -->
	<link rel="icon" href="../assets/logo/Logo.png">
</head>

<body style="background-image: url(../assets/img/torus.png); background-color:black; color:antiquewhite; background-position-x: 30px; background-position-y: -260px; padding-top: 150px;">
	<div class="container white">
		<div class="row" style="padding-top: -10px">
			<div class="col s12 m9">
				<div class="horizontal card">
					<div class="card-image">
						<img class="materialboxed" src="../assets/img/<?= $apparel["foto"]; ?>">
					</div>
					<div class=" card-content">
						<div class="keterangan" style="color: black">
							<p>
								<h4><?= $apparel["nama_barang"]; ?></h4>
							</p>
							<br>
							<p><?= $apparel["kantor_utama"]; ?></p>
							<p><?= $apparel["warna"]; ?></p>
							<p>IDR <?= $apparel["harga"]; ?></p>
							<p><?= $apparel["merk"]; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m3" style="padding-top: 90px;">
				<div class="card black">
					<div class="card-image">
						<img src="../assets/logo/<?= $apparel["logo_merk"]; ?>">
					</div>
				</div>

			</div>

		</div>
		<button class="tombol-kembali"><a href="../index.php" style="color: black">Kembali</a></button>
	</div>
	</div>


	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</body>

</html>