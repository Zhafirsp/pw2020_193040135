<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$apparel = query("SELECT * FROM apparel");

// membuat php cari
if (isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$apparel = query("SELECT * FROM apparel WHERE
              nama_barang LIKE '%$keyword%' OR
              kantor_utama LIKE '%$keyword%' OR
              warna LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' OR
              merk LIKE '%$keyword%' ");
} else {
	$apparel = query("SELECT * FROM apparel");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<form action="" method="get">
		<input type="text" name="keyword" autofocus>
		<button type="submit" name="cari">Cari!</button>
	</form>
	<div class="container">
		<?php if (empty($apparel)) : ?>
			<tr>
				<td colspan="7">
					<h1>Data tidak ditemukan</h1>
				</td>
			</tr>
		<?php else : ?>
			<?php $i = 1; ?>
			<?php foreach ($apparel as $brg) : ?>
				<p class="nama">
					<a class="link" href="php/detail.php?no=<?= $brg['no'] ?>">
						<?= $brg["nama_barang"] ?>
					</a>
				</p>
			<?php endforeach; ?>
		<?php endif; ?>
		<td><a href="php/admin.php"><button>Menuju Halaman Admin</button></a></td>
		</table>
	</div>
</body>

</html>