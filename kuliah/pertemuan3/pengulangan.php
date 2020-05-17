<!-- <?php 
	for ($i=0; $i <9 ; $i+=2) { 
		echo "Nilai ".$i. "<br>"
		;
	}

	$i =0;
	while ($i <= 10) {
		echo "Nilai ".$i. "<br>";
		$i++;
	}
	
	// echo "<hr>";
	// f  or ($i=1; $i <1 ; $i++) { 
	// 	echo "Pengulangan Nilai " .$i. "<br>";
	// }
	// $i =1;
	// do {
	// 	echo "Nilai " .$. "<br>";
	// } while ( <= 10);

 ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modul 2 - Latihan 2c</title>
	<style>
		.kotak {
			background-color: #fff;
			width: 20px;
			height: 20px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.kotak1 {
			background-color: #57e65a;
			width: 20px;
			height: 20px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: both;
			margin: 2px;
			color: black;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<table>
		<!-- Script PHP -->
		<?php

			$a = 1;
			$b = 1;
			while ($a <=5 ) {
				
				echo "<br>";
				for ($a=1; $a <=4 ; $a++) { 
				echo "<div class='kotak'>#$a</div> ";
				echo "<div class='clear'></div> ";
				}

				echo "<br>";
				for ($a=1; $a <=4 ; $a++) { 
				echo "<div class='kotak1'>$a</div> ";
				echo "<div class='clear'></div>";
				}

				
				$a++;
				}

		?>
	</table>
</body>
</html>


