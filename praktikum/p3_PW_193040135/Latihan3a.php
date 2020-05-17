<?php 
	function gantiStyle($tulisan, $style1, $style2)
	 {
		echo "<div class = '$style1'>
			<p class = '$style2'>$tulisan</p></div>";
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>

 	<style>
 		.style2 {
 			font-size: 28px;
 			font-family: arial;
			color : #8c782d;
			font-style: italic;
			font-weight: bolder;
 		}

 		.style1 {
 			border: 1px solid black;
 			box-shadow: 1px 1px 10px rgba(0,0,0,1);
 			border-radius: 5px;
 		}
 	</style>
 </head>
 <body>

 	<?php gantiStyle("Selamat datang di praktikum PW 2020",'style1','style2') ?>
 	
 </body>
 </html>