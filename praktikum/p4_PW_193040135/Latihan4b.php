<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>
<body>

<?php 
	$pemain = array();

	$pemain[] = "Mohammad Salah";
	$pemain[] = "Cristiano Ronaldo";
	$pemain[] = "Lionel Messi";
	$pemain[] = "Zlatan Ibrahimovic";
	$pemain[] = "Neymar Jr";
?>

		<ol>
			<?php
				for ($i=0; $i < count($pemain); $i++) { 
					echo "<li>$pemain[$i]</li>";
				}
			?>
		</ol>

<?php 	
		$hasil = array_push($pemain, "Luka Modric","Sadio Mane");
		$hasil = sort($pemain);
 ?>
		<hr>	

		<ol>
			<?php
				for ($i=0; $i < count($pemain); $i++) { 
					echo "<li>$pemain[$i]</li>";
				}
			?>
		</ol>

</body>
</html>
