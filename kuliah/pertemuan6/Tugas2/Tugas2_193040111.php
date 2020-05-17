<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>193040111</title>
		<style type="text/css">
			.header {
				background-color: grey;
			}
			.font {
				text-align: center;
			}
			img {
				width: 200px;
			} 
			table {
				text-align: center;
			}

		</style>
</head>
	<body>
		<h1>Daftar Buku</h1>

		<?php 
			$Buku = array(
			array("<img src = '../assets/img_111/anakrantau.jpg'>" , "Anak Rantau"	, "Ahmad Fuadi"		, "2017", "89.900"),
			array("<img src = '../assets/img_111/galaksi.jpg'>" , "Galaksi"	, "Poppi Pertiwi"		, "2018","89.000"),
			array("<img src = '../assets/img_111/gustira.jpg'>"	, "Gustira"	, "Kata Kokoh" , "2019", "89.000"),
			array("<img src = '../assets/img_111/kitapernahsalah.jpg'>"	  	,  "Kita Pernah Salah"		, "Faudbakh&AryaSinta"		, "2018", "79.500."),
			array("<img src = '../assets/img_111/konspirasi.jpg'>"	  	,  "Kospirasi Alam Semesta"		, "Fiersa Bersari"		, "2017", "80.000"),
			array("<img src = '../assets/img_111/laskar.jpg'>" 	, "Laskar Pelangi"		, "Andrea Hirata"		, "2015", "89.450."),
			array("<img src = '../assets/img_111/mariposa.jpg'>" , "Mariposa"	, "Luluk HF"			, "2018", "79.500."),
			array("<img src = '../assets/img_111/merayakan.jpg'>"		, "Merayakan Kehilangan"   		, "Briant Khirsna"		, "2016", "79.900."),
			array("<img src = '../assets/img_111/noversation.jpg'>"   , "Noversation" 	, "Valerie Patkar"		, "2019", "90.000."),
			array("<img src = '../assets/img_111/senja.jpg'>"    , "Senja Hujan Cerita"  	, "Boy Chandra"	, "2015", "65.850.")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
	
				<tr bgcolor="salmon">
				<div class="font">
					<td><h3>Foto</h3></td>
					<td><h3>Nama Buku</h3></td>
					<td><h3><center>Penulis</center></h3></td>
					<td><h3>Tahun Terbit</h3></td>
					<td><h3>Harga</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $Buku[0][0] ?></td>
					<td><?php echo $Buku[0][1] ?></td>
					<td><?php echo $Buku[0][2] ?></td>
					<td><?php echo $Buku[0][3] ?></td>
					<td><?php echo "Rp. ".$Buku[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[1][0] ?></td>
					<td><?php echo $Buku[1][1] ?></td>
					<td><?php echo $Buku[1][2] ?></td>
					<td><?php echo $Buku[1][3] ?></td>
					<td><?php echo "Rp. ".$Buku[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[2][0] ?></td>
					<td><?php echo $Buku[2][1] ?></td>
					<td><?php echo $Buku[2][2] ?></td>
					<td><?php echo $Buku[2][3] ?></td>
					<td><?php echo "Rp. ".$Buku[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[3][0] ?></td>
					<td><?php echo $Buku[3][1] ?></td>
					<td><?php echo $Buku[3][2] ?></td>
					<td><?php echo $Buku[3][3] ?></td>
					<td><?php echo "Rp. ".$Buku[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[4][0] ?></td>
					<td><?php echo $Buku[4][1] ?></td>
					<td><?php echo $Buku[4][2] ?></td>
					<td><?php echo $Buku[4][3] ?></td>
					<td><?php echo "Rp. ".$Buku[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[5][0] ?></td>
					<td><?php echo $Buku[5][1] ?></td>
					<td><?php echo $Buku[5][2] ?></td>
					<td><?php echo $Buku[5][3] ?></td>
					<td><?php echo "Rp. ".$Buku[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[6][0] ?></td>
					<td><?php echo $Buku[6][1] ?></td>
					<td><?php echo $Buku[6][2] ?></td>
					<td><?php echo $Buku[6][3] ?></td>
					<td><?php echo "Rp. ".$Buku[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[7][0] ?></td>
					<td><?php echo $Buku[7][1] ?></td>
					<td><?php echo $Buku[7][2] ?></td>
					<td><?php echo $Buku[7][3] ?></td>
					<td><?php echo "Rp. ".$Buku[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[8][0] ?></td>
					<td><?php echo $Buku[8][1] ?></td>
					<td><?php echo $Buku[8][2] ?></td>
					<td><?php echo $Buku[8][3] ?></td>
					<td><?php echo "Rp. ".$Buku[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[9][0] ?></td>
					<td><?php echo $Buku[9][1] ?></td>
					<td><?php echo $Buku[9][2] ?></td>
					<td><?php echo $Buku[9][3] ?></td>
					<td><?php echo "Rp. ".$Buku[9][4] ?></td>
				</tr>
			
		</table>
	</body>
</html>

		