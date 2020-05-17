<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$bag = array();
		$bag["<strong>Motherboard</strong>"] = "Papan sirkuit komponen komputer";
		$bag["<strong>Processor</strong>"] = "Sebuah IC yang Mengontrol seluruh jalannya sistem komputer";
		$bag["<strong>hard disk</strong>"] = "Media penyimpanan sekunder";
		$bag["<strong>PC Coller</strong>"] = "Mengurangi panas yang dihasilkan oleh komputer";
		$bag["<strong>VGA Card</strong>"] = "Mengolah data grafik yang akan ditampilkan oleh monitor";
		$bag["<strong>SSD</strong>"] = "Membaca, maupun menulis data dari kepingan CD" ;

	 ?>
	
		<ol>
			<?php
				foreach ($bag as $a => $isi) {
					echo "$a : $isi <br>";
				}
			?>
		</ol>

</body>
</html>
	
		

	

