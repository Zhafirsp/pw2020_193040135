<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Latihan 1 C</title>

	
	<style type="text/css">
		
	.bulat{
		border: 1px solid black;
		background-color: salmon;
		width: 40px;
		height: 40px;
		line-height: 40px;
		text-align: center;
		border-radius: 20px;
		margin: 3px;
		float: left;
	}

	.bersih{
		clear: both;
	}

	</style>


</head>
<body>

	<?php 

	$a = "A";
	$b = "B";
	$c = "C";

	?>

	<!-- Baris Pertama -->
	<div class='bulat'><?= $a; ?></div>
	<div class='bersih'></div>
	
	<!-- Baris Kedua -->
	<div class='bulat'><?= $b; ?></div>
	<div class='bulat'><?= $b; ?></div>
	<div class='bersih'></div>
	
	<!-- Baris Ketiga -->
	<div class='bulat'><?= $c ?></div>
	<div class='bulat'><?= $c ?></div>
	<div class='bulat'><?= $c ?></div>
	<div class='bersih'></div>



</body>
</html>