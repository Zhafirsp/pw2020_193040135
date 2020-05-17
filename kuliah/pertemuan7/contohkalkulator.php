<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calculator</title>
</head>
<body>
	<form method="get" action="result.php"></form>
		<table>
		<tr>
			<td></td>
			<td><input type="number" name="angka1"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="number" name="angka2"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" value="hitung">hasilkan</button></td>
		</tr>
	</table>
</body>
</html> -->
<!DOCTYPE html>
<html>
	<title>Form</title>
</head>
<body>
	<form method="get" action="result.php"></form>
<?php 
	$ktp = $_GET['ktp'];
	$nama = $_GET['nama'];
	$alamat = $_GET['alamat'];
 ?>
 <table>
 	<tr>
 		<td>No.KTP</td>
 		<td>: <? $ktp ?></td>
 		<td><input type="text"></td>
 	</tr>
 	<tr>
 		<td>Nama</td>
 		<td>: <? $nama ?></td>
 		<td><input type="text"></td>
 	</tr>
 	<tr>
 		<td>Alamat</td>
 		<td>: <? $alamat ?></td>
 		<td><input type="text"></td>
 	</tr>
	<tr>
		<td></td>
		<td><button type="submit">Daftar</button></td>
	</tr>
 </table>