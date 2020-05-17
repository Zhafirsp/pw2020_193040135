<?php
	$bio = array(
		"foto" => "deer.jpg",
		"nama" => "apa aja",
		"ttl" => "sejak lahir",
		


	)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TTTTTTTTTT</title>
</head>
<body>
	<table style="border: 1px solid black;">
		<tr>
		<th>Foto</th>
		<th>Nama</th>
		<th>TTL</th>
		<th>Alamat</th>
		<th>Hp</th>
		</tr>
		<tr>
			 <td><?= $bio['nama']?></td>
			 <td><img src="deer.jpg" style="height: 150px; width: 150px;"></td>
		</tr>
	</table>
	
</body>
</html>