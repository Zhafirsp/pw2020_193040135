<!DOCTYPE html>
<html>
	<head>
		<title>Latihan4d</title>
	</head>
	<body>
	<?php 
		$Bola = [
			"pemain1" => 
					["NO" => 1, "NAMA" => "Cristiano Ronaldo", "CLUB" => "Juventus", "MAIN" => 100, "GOL" => 76, "ASSIST" => 30],
			"pemain2" => 
					["NO" => 2, "NAMA" => "Lionel Messi", "CLUB" => "Barcelona", "MAIN" => 120, "GOL" => 80, "ASSIST" => 12],
			"pemain3" => 
					["NO" => 3, "NAMA" => "Luca Modric", "CLUB" => "Real Madrid", "MAIN" => 87, "GOL" => 12, "ASSIST" => 48],
			"pemain4" => 
					["NO" => 4, "NAMA" => "Mohmammad", "CLUB" => "Liverpool", "MAIN" => 90, "GOL" => 103, "ASSIST" => 8],
			"pemain5" => 
					["NO" => 5, "NAMA" => "Neymar Jr", "CLUB" => "Paris Saint Germain", "MAIN" => 109, "GOL" => 56, "ASSIST" => 15],
			"pemain6" => 
					["NO" => 6, "NAMA" => "Sadio Mane", "CLUB" => "Liverpool", "MAIN" => 63, "GOL" => 30, "ASSIST" => 70],
			"pemain7" => 
					["NO" => 7, "NAMA" => "Zlatan Ibrahimovic", "CLUB" => "AC Milan", "MAIN" => 100, "GOL" => 10, "ASSIST" => 12],
			];
		 ?>
		
		<table border="1" cellspacing="0" cellpadding="10">
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>CLUB</th>
				<th>MAIN</th>
				<th>GOL</th>
				<th>ASSIST</th>
			</tr>
			
			<?php
					foreach ($Bola as $pemain) {
			?>
				<tr>
					<td><?=  $pemain['NO'] ?></td>
					<td><?=  $pemain['NAMA'] ?></td>
					<td><?=  $pemain['CLUB'] ?></td>
					<td><?=  $pemain['MAIN'] ?></td>
					<td><?=  $pemain['GOL'] ?></td>
					<td><?=  $pemain['ASSIST'] ?></td>
				</tr>
					<?php
	
						}
					 ?>
				<tr>
					<td>#</td>
					<td colspan="2" align="center"><b>Jumlah</b></td>
					<td>
						<?php 
						$counter = 0;
						foreach ($Bola as $parapemain) {
							$counter += $parapemain['MAIN'];
						}
						echo $counter;
						?>
					</td>
					<td>
						<?php 
						$counter = 0;
						foreach ($Bola as $parapemain) {
							$counter += $parapemain['GOL'];
						}
						echo $counter;
						?>
					</td>
					<td>
						<?php 
						$counter = 0;
						foreach ($Bola as $parapemain) {
							$counter += $parapemain['ASSIST'];
						}
						echo $counter;
						?>
					</td>
				</tr>
		</table>
	</body>
</html>

<ol>
				