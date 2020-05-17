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

		</style>
</head>
	<body>
		<h3>ELEKTRONIK</h3>
		<?php 
			$barang = array(
			array("<img src = '../assets/img_135/apple.jpeg'>", "Mac Pro", "Dengan performa, ekspansi, dan konfigurasi tertinggi, ini adalah sistem yang dibuat untuk membantu kalangan profesional bekerja di luar segala batas yang ada.", "2019", "5.999","Apple"),
			array("<img src = '../assets/img_135/dell.jpg'>", "Dell UP3218K ", "UltraSharp 32 Ultra HD 8K", "23 Maret 2017","4.999","Dell"),
			array("<img src = '../assets/img_135/beats.jpg'>", "Beats By Dre X Graff Custom Pro", " dirancang khusus untuk seluruh pemain di final Super Bowl yaitu dari tim Denver Broncos dan Seattle Seahawks", "2 Februari 2014", "25.000","Beats By Dre"),
			array("<img src = '../assets/img_135/samsung.jpg'>", "Samsung 82” QLED Q60R 4K Smart TV", "Samsung menghadirkan Quantum Dot Display yang akan memanjakan mata dengan palet satu miliar warna dan Smart Hub yang memberi akses ke TV, game, atau streaming film hanya dengan satu remote control saja", "2019", "2,999","Samsung"),
			array("<img src = '../assets/img_135/lg.jpg'>", "LG GC-M247SLUV", "Inverter Linear Compressor,New Door-in-Door™,FRESH Balancer™,Moist Balance Crisper™,Kapasitas Besar,LED Lighting", "2014", "104.990","LG"),
			array("<img src = '../assets/img_135/lg1.jpg'>", "LG Mesin Cuci Front Loading FG1612H2V", "Dua sistem pengeringan yang dapat dipilih sesuai dengan kebutuhan", "2018", "1,044","LG"),
			array("<img src = '../assets/img_135/iphone.jpg'>", "Iphone 11 pro max", "Menggunakan chipset terkencang yang ada saat ini", "20 September 2019", "1,099","apple"),
			array("<img src = '../assets/img_135/coffee.jpg'>", "Royale 01 Espresso Veloce", "mesin kopi espresso mewah yang diperuntukan bagi pencinta kopi kelas atas. Mesin yang dibuat oleh Super Voloce ini diproduksi secara terbatas, sehingga tidak semua orang dapat memiliki mesin kopi ini", "2019", "1.000.000","Royal coffee maker"),
			array("<img src = '../assets/img_135/sharp.jpg'>", "Sharp EC-A1RA", "Ditanamkan dengan baterai 18 volt, Sharp EC-A1RA tidak memerlukan kabel, ini akan semakin memudahkan mobilitas atau menjangkau peralatan penuh debu di langit-langit ruanganmu", "2017", "271","Sharp"),
			array("<img src = '../assets/img_135/setrika.jpg'>", "Whizhome Steam Q G-665", "Setrika uap yang satu ini memiliki ukuran yang kecil, sehingga mudah disimpan dan dibawa kemana-mana. Dilengkapi dengan strong jet system sehingga dapat mengeluarkan uap yang kuat dan tidak akan membasahi pakaian", "2016", "41.6","Wizhome")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
	
				<tr bgcolor="lightgrey",>
				<div class="font">
					<td><h3>Foto</h3></td>
					<td><h3>Nama Barang</h3></td>
					<td><h3>Kelebihan</h3></td>
					<td><h3>Tanggal Liris</h3></td>
					<td><h3>Harga</h3></td>
					<td><h3>Merek</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $barang[0][0] ?></td>
					<td><?php echo $barang[0][1] ?></td>
					<td><?php echo $barang[0][2] ?></td>
					<td><?php echo $barang[0][3] ?></td>
					<td><?php echo "US$ ".$barang[0][4] ?></td>
					<td><?php echo $barang[0][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[1][0] ?></td>
					<td><?php echo $barang[1][1] ?></td>
					<td><?php echo $barang[1][2] ?></td>
					<td><?php echo $barang[1][3] ?></td>
					<td><?php echo "US$ ".$barang[1][4] ?></td>
					<td><?php echo $barang[1][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[2][0] ?></td>
					<td><?php echo $barang[2][1] ?></td>
					<td><?php echo $barang[2][2] ?></td>
					<td><?php echo $barang[2][3] ?></td>
					<td><?php echo "US$ ".$barang[2][4] ?></td>
					<td><?php echo $barang[2][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[3][0] ?></td>
					<td><?php echo $barang[3][1] ?></td>
					<td><?php echo $barang[3][2] ?></td>
					<td><?php echo $barang[3][3] ?></td>
					<td><?php echo "US$ ".$barang[3][4] ?></td>
					<td><?php echo $barang[3][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[4][0] ?></td>
					<td><?php echo $barang[4][1] ?></td>
					<td><?php echo $barang[4][2] ?></td>
					<td><?php echo $barang[4][3] ?></td>
					<td><?php echo "US$ ".$barang[4][4] ?></td>
					<td><?php echo $barang[4][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[5][0] ?></td>
					<td><?php echo $barang[5][1] ?></td>
					<td><?php echo $barang[5][2] ?></td>
					<td><?php echo $barang[5][3] ?></td>
					<td><?php echo "US$ ".$barang[5][4] ?></td>
					<td><?php echo $barang[5][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[6][0] ?></td>
					<td><?php echo $barang[6][1] ?></td>
					<td><?php echo $barang[6][2] ?></td>
					<td><?php echo $barang[6][3] ?></td>
					<td><?php echo "US$ ".$barang[6][4] ?></td>
					<td><?php echo $barang[6][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[7][0] ?></td>
					<td><?php echo $barang[7][1] ?></td>
					<td><?php echo $barang[7][2] ?></td>
					<td><?php echo $barang[7][3] ?></td>
					<td><?php echo "US$ ".$barang[7][4] ?></td>
					<td><?php echo $barang[7][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[8][0] ?></td>
					<td><?php echo $barang[8][1] ?></td>
					<td><?php echo $barang[8][2] ?></td>
					<td><?php echo $barang[8][3] ?></td>
					<td><?php echo "US$ ".$barang[8][4] ?></td>
					<td><?php echo $barang[8][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $barang[9][0] ?></td>
					<td><?php echo $barang[9][1] ?></td>
					<td><?php echo $barang[9][2] ?></td>
					<td><?php echo $barang[9][3] ?></td>
					<td><?php echo "US$. ".$barang[9][4] ?></td>
					<td><?php echo $barang[9][4] ?></td>
				</tr>	
		</table>
	</body>
</html>

		