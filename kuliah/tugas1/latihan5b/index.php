<?php
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$apparel = query("SELECT * FROM apparel");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<table cellpadding="10" cellspacing="0" border="1">
			<tr>
				<th>NO</th>
				<th>Foto</th>
				<th>Nama Barang</th>
				<th>Kantor Utama</th>
				<th>Warna</th>
				<th>Harga</th>
				<th>Merk</th>
				<th>Logo Merk</th>
			</tr>
			<?php $i = 1 ?>
			<?php foreach ($apparel as $brg) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $brg["foto"]; ?>"></td>
					<td><?= $brg["nama_barang"] ?></td>
					<td><?= $brg["kantor_utama"] ?></td>
					<td><?= $brg["warna"] ?></td>
					<td><?= $brg["harga"] ?></td>
					<td><?= $brg["merk"] ?></td>
					<td><img src="assets/logo/<?= $brg["logo_merk"]; ?>"></td>
				</tr>
				<?php $i++ ?>
			<?php endforeach; ?>
		</table>
	</div>
</body>
</html>
			
		