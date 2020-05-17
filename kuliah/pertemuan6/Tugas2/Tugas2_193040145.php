<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>193040145_Ferri</title>
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
		<h1>Jenis-jenis Peralatan Elektronik</h1>

		<?php 
			$Barang = array(
			array("<img src = '../assets/img_145/1.jpg'>", "Samsung", "Galaxy Note 10 Lite", "Maret 2020", "Rp 8.199.000."),
			array("<img src = '../assets/img_145/2.jpg'>", "Samsung", "Crystal UHD 4K Smart TV TU8000", "Januari 2020","Rp 13.499.000."),
			array("<img src = '../assets/img_145/3.jpg'>", "Samsung", "SAMSUNG AS05TULN", "Juni 2018", "Rp 2.350.000"),
			array("<img src = '../assets/img_145/4.jpg'>", "ELECTROLUX ", "ETB-1800PC", "Agustus 2013", "Rp 2.830.000."),
			array("<img src = '../assets/img_145/5.jpg'>", "Amcrest", "IP3M-956EW", "Maret 2017", "Rp 18.751.000"),
			array("<img src = '../assets/img_145/6.png'>", "PANASONIC", "NA-140VS4", "Maret 2018", "Rp 9.009.000"),
			array("<img src = '../assets/img_145/7.png'>", "Electrolux", "Vacuum cleaner EasyGo", "September 2018", "1.305.000"),
			array("<img src = '../assets/img_145/8.jpg'>", "Krisbow", "Kipas Angin Meja Industrial", "July 2019", "Rp 374.950."),
			array("<img src = '../assets/img_145/9.jpg'>", "Hamilton", "49980Z ", "Maret 2019", "1,013,000"),
			array("<img src = '../assets/img_145/10.jpg'>", " SPT", " RC-1407 8 Cups Smart Rice Cooker", "April 2018", "978.000.")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="40">
	
				<tr bgcolor="blue">
					<td><h3>Foto</h3></td>
					<td><h3>Merek Peralatan Elektronik</h3></td>
					<td><h3><center>Tipe/Model barang</center></h3></td>
					<td><h3>Tahun Rilis</h3></td>
					<td><h3>Harga</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $Barang[0][0] ?></td>
					<td><?php echo $Barang[0][1] ?></td>
					<td><?php echo $Barang[0][2] ?></td>
					<td><?php echo $Barang[0][3] ?></td>
					<td><?php echo " ".$Barang[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[1][0] ?></td>
					<td><?php echo $Barang[1][1] ?></td>
					<td><?php echo $Barang[1][2] ?></td>
					<td><?php echo $Barang[1][3] ?></td>
					<td><?php echo " ".$Barang[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[2][0] ?></td>
					<td><?php echo $Barang[2][1] ?></td>
					<td><?php echo $Barang[2][2] ?></td>
					<td><?php echo $Barang[2][3] ?></td>
					<td><?php echo " ".$Barang[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[3][0] ?></td>
					<td><?php echo $Barang[3][1] ?></td>
					<td><?php echo $Barang[3][2] ?></td>
					<td><?php echo $Barang[3][3] ?></td>
					<td><?php echo " ".$Barang[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[4][0] ?></td>
					<td><?php echo $Barang[4][1] ?></td>
					<td><?php echo $Barang[4][2] ?></td>
					<td><?php echo $Barang[4][3] ?></td>
					<td><?php echo " ".$Barang[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[5][0] ?></td>
					<td><?php echo $Barang[5][1] ?></td>
					<td><?php echo $Barang[5][2] ?></td>
					<td><?php echo $Barang[5][3] ?></td>
					<td><?php echo "Rp. ".$Barang[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[6][0] ?></td>
					<td><?php echo $Barang[6][1] ?></td>
					<td><?php echo $Barang[6][2] ?></td>
					<td><?php echo $Barang[6][3] ?></td>
					<td><?php echo "Rp. ".$Barang[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[7][0] ?></td>
					<td><?php echo $Barang[7][1] ?></td>
					<td><?php echo $Barang[7][2] ?></td>
					<td><?php echo $Barang[7][3] ?></td>
					<td><?php echo "Rp. ".$Barang[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[8][0] ?></td>
					<td><?php echo $Barang[8][1] ?></td>
					<td><?php echo $Barang[8][2] ?></td>
					<td><?php echo $Barang[8][3] ?></td>
					<td><?php echo "Rp. ".$Barang[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[9][0] ?></td>
					<td><?php echo $Barang[9][1] ?></td>
					<td><?php echo $Barang[9][2] ?></td>
					<td><?php echo $Barang[9][3] ?></td>
					<td><?php echo "Rp. ".$Barang[9][4] ?></td>
				</tr>
				
		</table>
	</body>
</htmlBarang