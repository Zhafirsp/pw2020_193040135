<?php 
	$lirik = "	Bilakah engkau mengerti <br>
				Semua yg ada di hatiku ini <br> 
				Ku hanya ingin dekatmu <br>
				Namun kau selalu meniadakan aku <br>
				Bukan engkau <br>
				Kau yg selalu bilang, selalu bilang <br>
				Tuk tetap aku di sini <br>
				Takkan berarti <br>
				Bahwa yg kau bilang, yg kau bilang <br>
				Kita saling memiliki <br>
				Dimana aku di sini <br>
				Dimana aku di sini <br>
				Dimana aku di sini <br>
				Pernahkah engkau sadari <br>
				Bahwa kau selalu meniadakan aku <br>
				Bukan engkau <br>
				Kau yg selalu bilang, selalu bilang <br>
				Tuk tetap aku di sini <br>
				Takkan berarti <br>
				Bahwa yg kau bilang, yg kau bilang Kita saling memiliki <br>
				Dimana aku disini <br>
				Dimana aku disini <br>
				Dimana aku disini <br> ";

	$lirik1  = str_replace("a", "o", $lirik); //hanya bisa untuk 1 variable
	$lirik2 = str_replace("i", "o", $lirik1);
	$lirik3 = str_replace("u", "o", $lirik2);
	$lirik4 = str_replace("e", "o", $lirik3);

	echo "$lirik4";
 ?>