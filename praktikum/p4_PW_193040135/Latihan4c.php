<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Daftar pemain bola terkenal dan clubnya</h3>
	<table>
	<?php 
	$pemain = array();
		$pemain["<strong>Cristiano Ronaldo</strong>"] = "Juventus";
		$pemain["<strong>Lionel Messi</strong>"] = "Barcelona";
		$pemain["<strong>Luka Modric</strong>"] = "Real Madrid";
		$pemain["<strong>Mohammad Salah</strong>"] = "Liverpool";
		$pemain["<strong>Neymar Jr</strong>"] = "Paris Saint Germain";
		$pemain["<strong>Sadio Mane</strong>"] = "Liverpool";
		$pemain["<strong>Zlatan Ibrahimovic</strong>"] = "AC Milan";

	 ?>
	
		<ol>
			<?php
				foreach ($pemain as $a => $club) {
					echo "<tr><td>$a</td><td> : </td><td>$club</td></tr>";
				}
			?>
		</ol>
	</table>
</body>
</html>