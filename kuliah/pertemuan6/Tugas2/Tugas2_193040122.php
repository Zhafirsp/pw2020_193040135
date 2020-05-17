<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas2_193040122</title>
		<style type="text/css">
		
			body {
				text-align: center;
			}
			img {
				width: 200px;
			}

		</style>
</head>
	<body>
		<h1>FILM</h1>

		<?php 
			$film = array(
			array("<img src = '../assets/img_122/1.jpg'>", "The Avengers: End Game", "Action", "2019", "8.5/10"),
			array("<img src = '../assets/img_122/2.jpg'>", "Harry potter", "Action", "2001","8/10"),
			array("<img src = '../assets/img_122/3.jpg'>", "Dilan 1991", "Romance", "2018", "7.3/10"),
			array("<img src = '../assets/img_122/4.jpg'>", "Wonder Woman", "Action", "2017", "8.2/10"),
			array("<img src = '../assets/img_122/5.jpg'>", "Parasite", "Thriller", "2020", "7.5/10"),
			array("<img src = '../assets/img_122/6.jpg'>", "Star Wars", "Action", "1997", "8.1/10"),
			array("<img src = '../assets/img_122/7.jpg'>", "Ayat Ayat Cinta 2", "Thriller", "2018", "7/10"),
			array("<img src = '../assets/img_122/8.jpg'>", "X-man", "Action", "1983", "32 miliar"),
			array("<img src = '../assets/img_122/9.jpg'>", "Hujan Bulan Juni", "Romance", "2017", "7/10"),
			array("<img src = '../assets/img_122/10.jpg'>", "A Star is Born", "Romance", "November 2018", "7.9/10")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="67">
	
				<tr bgcolor="pink">
					<td><h3>Film</h3></td>
					<td><h3>Nama Film</h3></td>
					<td><h3><center>Genre</center></h3></td>
					<td><h3>Tahun Rilis</h3></td>
					<td><h3>Rating</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $film[0][0] ?></td>
					<td><?php echo $film[0][1] ?></td>
					<td><?php echo $film[0][2] ?></td>
					<td><?php echo $film[0][3] ?></td>
					<td><?php echo $film[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[1][0] ?></td>
					<td><?php echo $film[1][1] ?></td>
					<td><?php echo $film[1][2] ?></td>
					<td><?php echo $film[1][3] ?></td>
					<td><?php echo $film[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[2][0] ?></td>
					<td><?php echo $film[2][1] ?></td>
					<td><?php echo $film[2][2] ?></td>
					<td><?php echo $film[2][3] ?></td>
					<td><?php echo $film[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[3][0] ?></td>
					<td><?php echo $film[3][1] ?></td>
					<td><?php echo $film[3][2] ?></td>
					<td><?php echo $film[3][3] ?></td>
					<td><?php echo $film[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[4][0] ?></td>
					<td><?php echo $film[4][1] ?></td>
					<td><?php echo $film[4][2] ?></td>
					<td><?php echo $film[4][3] ?></td>
					<td><?php echo $film[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[5][0] ?></td>
					<td><?php echo $film[5][1] ?></td>
					<td><?php echo $film[5][2] ?></td>
					<td><?php echo $film[5][3] ?></td>
					<td><?php echo $film[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[6][0] ?></td>
					<td><?php echo $film[6][1] ?></td>
					<td><?php echo $film[6][2] ?></td>
					<td><?php echo $film[6][3] ?></td>
					<td><?php echo $film[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[7][0] ?></td>
					<td><?php echo $film[7][1] ?></td>
					<td><?php echo $film[7][2] ?></td>
					<td><?php echo $film[7][3] ?></td>
					<td><?php echo $film[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[8][0] ?></td>
					<td><?php echo $film[8][1] ?></td>
					<td><?php echo $film[8][2] ?></td>
					<td><?php echo $film[8][3] ?></td>
					<td><?php echo $film[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[9][0] ?></td>
					<td><?php echo $film[9][1] ?></td>
					<td><?php echo $film[9][2] ?></td>
					<td><?php echo $film[9][3] ?></td>
					<td><?php echo $film[9][4] ?></td>
				</tr>
				
		</table>
	</body>
</html>

		