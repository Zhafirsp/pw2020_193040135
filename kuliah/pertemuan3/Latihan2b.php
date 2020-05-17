<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modul 2 - Latihan 2b</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>

		<!-- Script PHP -->
		<?php 
			$a = 1;
			while ($a <= 5) {
				echo "<tr>";

				if ($a%2 == 1) {
				
		
					for ($i=1; $i <=5 ; $i++) { 

					echo " <td> Baris $a, Kolom $i </td>" ;
				}

				}else {

					for ($i=1; $i <=5 ; $i++) { 

					echo " <td> &nbsp </td>" ;
				}
			}
				echo "</tr>";
				$a++;
			
			}
		 ?>
	</table>
</body>
</html>