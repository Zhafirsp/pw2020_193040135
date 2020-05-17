<?php 
	$balon = "Balonku ada lima
			Rupa-rupa warnanya
			Hijau, kuning, kelabu Merah muda dan biru
			Meletus balon hijau DOR! 
			Hatiku sangat kacau 
			Balonku tinggal empat 
			Kupegang erat-erat";

	$balon1 = str_replace("a", "o", $balon); //hanya bisa untuk 1 variable
	$balon2 = str_replace("i", "o", $balon1);
	$balon3 = str_replace("u", "o", $balon2);
	$balon4 = str_replace("e", "o", $balon3);

	echo "$balon4";
 ?>