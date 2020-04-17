<?php
	// melakukan koneksi ke database
	$conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");

	//memilih database
	mysqli_select_db($conn, "tubes_193040135") or die("Database Salah!");

	// query mengambil objek dari table didalam database
	$result = mysqli_query($conn,"SELECT * FROM apparel");
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
			<?php while ($apparel = mysqli_fetch_assoc($result)) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $apparel["foto"]; ?>"></td>
					<td><?= $apparel["nama_barang"] ?></td>
					<td><?= $apparel["kantor_utama"] ?></td>
					<td><?= $apparel["warna"] ?></td>
					<td>IDR. <?= $apparel["harga"] ?></td>
					<td><?= $apparel["merk"] ?></td>
					<td><img src="assets/logo/<?= $apparel["logo_merk"]; ?>"></td>
				</tr>
				<?php $i++ ?>
			<?php endwhile; ?>
		</table>
	</div>
</body>
</html>
			
		