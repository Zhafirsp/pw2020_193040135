<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>macam-macam perangkat keras komputer dan fungsinya</h3>
	<table>
	<?php 
	$bag = [
		"komponen" =>
		["<strong>Motherboard</strong> = Papan sirkuit komponen komputer"],
		"komponen" =>
		["<strong>Processor</strong> = Sebuah IC yang Mengontrol seluruh jalannya sistem komputer"],
		"komponen" =>
		["<strong>hard disk</strong> = Media penyimpanan sekunder"],
		"komponen" =>
		["<strong>PC Coller</strong> = Mengurangi panas yang dihasilkan oleh komputer"],
		"komponen" =>
		["<strong>VGA Card</strong> = Mengolah data grafik yang akan ditampilkan oleh monitor"],
		"komponen" =>
		["<strong>SSD</strong> = Membaca, maupun menulis data dari kepingan CD" ];
			];
	 ?>
	
		<ol>
			<?php
				foreach ($bag as $a => $isi) {
					echo "<tr><td>$a</td><td> : </td><td>$isi</td></tr>";
				}
			?>
		</ol>
	</table>
</body>
</html>