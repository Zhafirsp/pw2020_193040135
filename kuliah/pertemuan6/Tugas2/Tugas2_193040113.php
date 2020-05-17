<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ipan_193040113</title>
		<style type="text/css">

			.atas{
				color: salmon;
				text-align: center;
			}

			body {
				text-align: center;
			}
			img {
				width: 200px;
			}

		</style>
</head>
	<body>
		<div class="atas"><h1><b>Jenis-jenis Mobil</b></h1></div>

		<?php 
			$Mobil = array(
			array("<img src = '../assets/img_113/1.jpg'>", "McLaren", "Senna", "Desember 2017", "13,4 miliar."),
			array("<img src = '../assets/img_113/2.jpg'>", "Arash", "AF10 Hybrid", "Februari 2016","13,4 miliar."),
			array("<img src = '../assets/img_113/3.jpg'>", "Mazzanti", "Evantra Millecavalli", "Februari 2020", "13,4 Milyar"),
			array("<img src = '../assets/img_112/4.jpg'>", "Zenvo", "TS1", "Januari 2020", "Rp 26,8 miliar."),
			array("<img src = '../assets/img_113/5.jpg'>", "Koenigsegg", "Regera", "Desember 2019", "25,4 milliar"),
			array("<img src = '../assets/img_113/6.jpg'>", "Ferrari", "LaFerrari Aperta", "Februari 2020", "29,5 miliar"),
			array("<img src = '../assets/img_113/7.jpg'>", "Pagani", "Huayra Roadster", "April 2018", "32 miliar"),
			array("<img src = '../assets/img_113/8.jpg'>", "Bugatti", "Chiron", "April 2019", "36 miliar."),
			array("<img src = '../assets/img_113/9.jpg'>", "Aston Martin", "Valkyrie", "Mei 2018", "42,8 miliar"),
			array("<img src = '../assets/img_113/10.jpg'>", "Lamborghini", "Veneno Roadster", "November 2018", "60 miliar")
			);

	 ?>
	<table border="3" cellspacing="0" cellpadding="10">
	
		<tr bgcolor="salmon">
				<td><h3>Foto</h3></td>
				<td><h3>Merek Mobil</h3></td>
				<td><h3><center>Tipe Mobil</center></h3></td>
				<td><h3>Tahun Rilis</h3></td>
				<td><h3>Harga</h3></td>
			</div>
		</tr>
		
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[0][0] ?></td>
				<td><?php echo $Mobil[0][1] ?></td>
				<td><?php echo $Mobil[0][2] ?></td>
				<td><?php echo $Mobil[0][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[0][4] ?></td>
		</tr>
		
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[1][0] ?></td>
				<td><?php echo $Mobil[1][1] ?></td>
				<td><?php echo $Mobil[1][2] ?></td>
				<td><?php echo $Mobil[1][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[1][4] ?></td>
		</tr>
		
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[2][0] ?></td>
				<td><?php echo $Mobil[2][1] ?></td>
				<td><?php echo $Mobil[2][2] ?></td>
				<td><?php echo $Mobil[2][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[2][4] ?></td>
		</tr>
		
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[3][0] ?></td>
				<td><?php echo $Mobil[3][1] ?></td>
				<td><?php echo $Mobil[3][2] ?></td>
				<td><?php echo $Mobil[3][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[3][4] ?></td>
		</tr>
		
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[4][0] ?></td>
				<td><?php echo $Mobil[4][1] ?></td>
				<td><?php echo $Mobil[4][2] ?></td>
				<td><?php echo $Mobil[4][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[4][4] ?></td>
		</tr>
		
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[5][0] ?></td>
				<td><?php echo $Mobil[5][1] ?></td>
				<td><?php echo $Mobil[5][2] ?></td>
				<td><?php echo $Mobil[5][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[5][4] ?></td>
		</tr>
				
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[6][0] ?></td>
				<td><?php echo $Mobil[6][1] ?></td>
				<td><?php echo $Mobil[6][2] ?></td>
				<td><?php echo $Mobil[6][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[6][4] ?></td>
		</tr>
				
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[7][0] ?></td>
				<td><?php echo $Mobil[7][1] ?></td>
				<td><?php echo $Mobil[7][2] ?></td>
				<td><?php echo $Mobil[7][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[7][4] ?></td>
		</tr>
				
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[8][0] ?></td>
				<td><?php echo $Mobil[8][1] ?></td>
				<td><?php echo $Mobil[8][2] ?></td>
				<td><?php echo $Mobil[8][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[8][4] ?></td>
		</tr>
		
		<tr bgcolor="#F4A460">
				<td><?php echo $Mobil[9][0] ?></td>
				<td><?php echo $Mobil[9][1] ?></td>
				<td><?php echo $Mobil[9][2] ?></td>
				<td><?php echo $Mobil[9][3] ?></td>
				<td><?php echo "Rp. ".$Mobil[9][4] ?></td>
		</tr>
				
		</table>
	</body>
</html>

		