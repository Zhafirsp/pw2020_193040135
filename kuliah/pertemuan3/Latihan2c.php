<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modul 2 - Latihan 2c</title>
	<style>
		.kotak {
			background-color: #fff;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.kotak1 {
			background-color: #57e65a;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	
		<!-- Script PHP -->
		<?php

			$a = 1;

			while ($a <= 1) {
				for ($b=$a; $b >=1 ; $b--) { 

				echo "<div class='kotak'>#$a</div>";
				echo "<div class='kotak1'>$a</div> ";
				} 

				echo "<div class='clear'></div>";
				$a++;

				}
				while ($a <= 2) {
				for ($b=$a; $b >=1 ; $b--) { 

				echo "<div class='kotak'>#$a</div>";
				echo "<div class='kotak1'>$a</div> ";
				} 
				
				echo "<div class='clear'></div>";
				
				$a++;

				while ($a <= 3) {
				for ($b=$a; $b >=1 ; $b--) { 

				echo "<div class='kotak'>#$a</div>";
				echo "<div class='kotak1'>$a</div> ";
				} 
				
				echo "<div class='clear'></div>";
				
				$a++;
				}
				while ($a <= 4) {
				for ($b=$a; $b >=1 ; $b--) { 

				echo "<div class='kotak'>#$a</div>";
				echo "<div class='kotak1'>$a</div> ";
				} 
				
				echo "<div class='clear'></div>";
				
				$a++;
				}
				while ($a <= 5) {
				for ($b=$a; $b >=1 ; $b--) { 

				echo "<div class='kotak'>#$a</div>";
				echo "<div class='kotak1'>$a</div> ";
				} 
				
				echo "<div class='clear'></div>";
				
				$a++;
				}
				}

		?>
	
</body>
</html>