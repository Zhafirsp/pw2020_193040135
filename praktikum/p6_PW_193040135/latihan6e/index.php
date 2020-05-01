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
		<?php foreach ($apparel as $brg) : ?>
			<p class="nama">
				<a class="link" href="php/detail.php?no=<?= $brg['no'] ?>">
					<?= $brg["nama_barang"] ?>
				</a>
			</p>
		<?php endforeach; ?>
		</table>
	</div>
</body>

</html>