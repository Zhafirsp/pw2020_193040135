<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modul 2 - Latihan 2c</title>
	<style>
		.kotak {
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

		.black {
			background-color: black;
		}
		.white {
			background-color: white;
		}
	</style>
</head>
<body>
	

	<?php



	for($b=1; $b<=5;$b++){


		if ($b %2) {
		$a = 1;
		while($a <= 5){
			if($a %2){
			echo "<div class='kotak black'></div>";			
			}else{
				echo "<div class='kotak white'></div>";
			}
			$a++;
		}
				echo "<div class='clear'></div>";
		}
		












else {
			$a = 1;
			while($a <= 5){
				if($a %2){
				echo "<div class='kotak white'></div>";			
				}else{
				echo "<div class='kotak black'></div>";
				}
				$a++;
			}
				echo "<div class='clear'></div>";	
		}



	}
	
	?>

	
</body>
</html>