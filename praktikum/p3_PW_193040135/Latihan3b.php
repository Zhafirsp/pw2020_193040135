
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.tulisan {
    width: 1000px;
    border: 1px solid black;
    padding: 20px;
    font-size: 20px;
    font-style: comic sans ms;
}
</style>
</head>
<body>
	<?php
	$jawabanIsset = "Isset adalah = .......................<br><br>";
	$jawabanEmpty = "Empty adalah =............................";

	$GLOBALS['Isset'] = $jawabanIsset;
	$GLOBALS['Empty'] = $jawabanEmpty;
	function soal($style){

		echo "<div class='$style'>".
		$GLOBALS['Isset'].
		$GLOBALS['Empty'].
		"</div>";
	}
	soal("tulisan");


	?>
</body>
</html>