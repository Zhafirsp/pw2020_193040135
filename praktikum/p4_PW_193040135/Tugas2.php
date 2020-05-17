<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas2_193040135</title>
		<style type="text/css">
			.header {
				background-color: grey;
			}
			tr, h3 {
				text-align: center;
			}
			img {
				width: 200px;
			}
			h2 {
				font-family: stencil;
				text-align: center;
			}
		</style>
</head>
	<body>
		<h2>APPAREL</h2>
		<?php 
			$barang = array(
			array("<img src = 'assets/img/phillipworks.jpg'>", "Pride Of Indonesia", "Jl. Karangsari No.3, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161.", "White", "525.000","Phillip Works","<img src = 'assets/logo/phillip.png'>"),
			array("<img src = 'assets/img/var.jpeg'>", "Vetements Artisanal Jeans Jacket 'Blue", "Zürich, Swiss", "Blue", "27,074,000","Vetements","<img src = 'assets/logo/vet.jpeg'>"),
			array("<img src = 'assets/img/sl.jpeg'>", "Saint Laurent Printed Short Sleeve Shirt 'Black'", "Paris, Perancis", "Black", "11,272,000","Yves Saint Laurent","<img src = 'assets/logo/ysl.png'>"),
			array("<img src = 'assets/img/mango.jpeg'>", "Mango Man Striped Cotton Shirt", "Palau-solità i Plegamans, Spanyol", "Ecru", "649.000","Mango Man","<img src = 'assets/logo/mango.jpeg'>"),
			array("<img src = 'assets/img/bbc.jpg'>", "ID / C-TEE LS Neighborhood", "7 Mercer St, New York, NY 10012", "White", "1,875,000","Billionaire Boys Club","<img src = 'assets/logo/bbc.png'>"),
			array("<img src = 'assets/img/sd.jpeg'>", "Surplus Goods Boxy Graphic T-Shirt" , "Cheltenham, Gloucestershire, Britania Raya", "Black Charcoal", "285,000","Superdry","<img src = 'assets/logo/sd.png'>"),
			array("<img src = 'assets/img/bbcc.jpg'>", "Billionaire Boys Club Trek Jean 'Trek Jeans'", "7 Mercer St, New York, NY 10012", "Blue Trek Jeans", "3,186,000","Billionaire Boys Club","<img src = 'assets/logo/bbc.png'>"),
			array("<img src = 'assets/img/qs.jpeg'>", "Quiksilver Everyday Chino Light Short", "Huntington Beach, California, Amerika", "Black", "699.000 ","Quiksilver","<img src = 'assets/logo/qs.jpeg'>"),
			array("<img src = 'assets/img/nike.jpeg'>", "Air Jordan 1 Retro High OG 'Wings' ", "Beaverton, Oregon, Amerika", "Copper Black/Metallic Gold-Black","8,159,000 - 19,155,000","Air Jordan","<img src = 'assets/logo/nike.png'>"),
			array("<img src = 'assets/img/conv.jpeg'>", "Unisex Waterproof GORE-TEX Leather Chuck 70 High Top", "Boston, Massachusetts, Amerika", "white alyssum/black/egret", "1,923,000","Converse","<img src = 'assets/logo/conv.png'>")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
	
				<tr bgcolor="lightgrey",>
					<td><h3>Foto</h3></td>
					<td><h3>Nama Barang</h3></td>
					<td><h3>Kantor Utama</h3></td>
					<td><h3>Warna</h3></td>
					<td><h3>Harga</h3></td>
					<td><h3>Merk</h3></td>
					<td><h3>Logo Merk</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $barang[0][0] ?></td>
					<td><?php echo $barang[0][1] ?></td>
					<td><?php echo $barang[0][2] ?></td>
					<td><?php echo $barang[0][3] ?></td>
					<td><?php echo "IDR ".$barang[0][4] ?></td>
					<td><?php echo $barang[0][5] ?></td>
					<td><?php echo $barang[0][6] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[1][0] ?></td>
					<td><?php echo $barang[1][1] ?></td>
					<td><?php echo $barang[1][2] ?></td>
					<td><?php echo $barang[1][3] ?></td>
					<td><?php echo "IDR ".$barang[1][4] ?></td>
					<td><?php echo $barang[1][5] ?></td>
					<td><?php echo $barang[1][6] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[2][0] ?></td>
					<td><?php echo $barang[2][1] ?></td>
					<td><?php echo $barang[2][2] ?></td>
					<td><?php echo $barang[2][3] ?></td>
					<td><?php echo "IDR ".$barang[2][4] ?></td>
					<td><?php echo $barang[2][5] ?></td>
					<td><?php echo $barang[2][6] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[3][0] ?></td>
					<td><?php echo $barang[3][1] ?></td>
					<td><?php echo $barang[3][2] ?></td>
					<td><?php echo $barang[3][3] ?></td>
					<td><?php echo "IDR ".$barang[3][4] ?></td>
					<td><?php echo $barang[3][5] ?></td>
					<td><?php echo $barang[3][6] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[4][0] ?></td>
					<td><?php echo $barang[4][1] ?></td>
					<td><?php echo $barang[4][2] ?></td>
					<td><?php echo $barang[4][3] ?></td>
					<td><?php echo "IDR ".$barang[4][4] ?></td>
					<td><?php echo $barang[4][5] ?></td>
					<td><?php echo $barang[4][6] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[5][0] ?></td>
					<td><?php echo $barang[5][1] ?></td>
					<td><?php echo $barang[5][2] ?></td>
					<td><?php echo $barang[5][3] ?></td>
					<td><?php echo "IDR ".$barang[5][4] ?></td>
					<td><?php echo $barang[5][5] ?></td>
					<td><?php echo $barang[5][6] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[6][0] ?></td>
					<td><?php echo $barang[6][1] ?></td>
					<td><?php echo $barang[6][2] ?></td>
					<td><?php echo $barang[6][3] ?></td>
					<td><?php echo "IDR ".$barang[6][4] ?></td>
					<td><?php echo $barang[6][5] ?></td>
					<td><?php echo $barang[6][6] ?></td>

				</tr>
				<tr>
					<td><?php echo $barang[7][0] ?></td>
					<td><?php echo $barang[7][1] ?></td>
					<td><?php echo $barang[7][2] ?></td>
					<td><?php echo $barang[7][3] ?></td>
					<td><?php echo "IDR ".$barang[7][4] ?></td>
					<td><?php echo $barang[7][5] ?></td>
					<td><?php echo $barang[7][6] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[8][0] ?></td>
					<td><?php echo $barang[8][1] ?></td>
					<td><?php echo $barang[8][2] ?></td>
					<td><?php echo $barang[8][3] ?></td>
					<td><?php echo "IDR ".$barang[8][4] ?></td>
					<td><?php echo $barang[8][5] ?></td>
					<td><?php echo $barang[8][6] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[9][0] ?></td>
					<td><?php echo $barang[9][1] ?></td>
					<td><?php echo $barang[9][2] ?></td>
					<td><?php echo $barang[9][3] ?></td>
					<td><?php echo "IDR ".$barang[9][4] ?></td>
					<td><?php echo $barang[9][5] ?></td>
					<td><?php echo $barang[9][6] ?></td>
				</tr>	
		</table>
	</body>
</html>

		