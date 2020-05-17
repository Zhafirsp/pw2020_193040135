<?php 
//		// array asosiatif
	// $asu = array("nama" => "bagi",
	// 	"nrp" => "100000",
	// 	"alamat" => "setbud",
	// 	"usia" => "36", );
 // 		echo $asu["nama"];
 // 		echo "\n";
 // 		echo $asu["nrp"];

 // 		echo "<hr>";

 // 		// array biasa
 // 		$asu = array("bagi", "100000", "setbud", "36" );
 // 		echo $asu[0];
 
	//foreach
	$asu = [
		"001" => "asu"
		"002" => "basu"
		"004" => "dasu"
	];
	foreach ($asu as $knrp => $nama) {
		echo "$knrp : $nama" ;
	}

 ?>