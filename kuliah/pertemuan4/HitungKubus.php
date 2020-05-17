<?php 
	// //kubus pertama//
	
	// $sisi1 = 9;

	// //kubus kedura

	// $sisi2 = 4;
		
	// //luas ke 1
	// $luas_kb1 = hitungluaskubus($sisi1)
	// $luas_kb1 =$sisi1*$sisi1*6;

	// //luas ke 2
		// $luas_kb2 = hitungluaskubus($sisi2)
	// $luas_kb2 =$sisi2*$sisi2*6;

	// // $total_luas = $luas_kb1+$luas_kb2;
	// // echo "Total Luas =". $total_luas;

	// tambahluas2kubus(5,3);

	// function tambahluas2kubus($luas1, $luas2)
	// {
	// 	$total_luas = $luas1*$luas2;
	// 	echo $total_luas; // jika pakai echo
	// }

	// echo "Total Luas =". tambahluas2kubus($luas_kb1,$luas);

	// function tambahluas2kubus($luas1, $luas2)
	// {
	// 	$total_luas = $luas1*$luas2;
	// 	return $total_luas; // jika pakai return
	// }

	$r1 = 7;
	$r2 = 9;
	$PHI = 3.14;

	function luaslingkaran($r,$PHI)
	{`
		$luas = $r*$r*$PHI;
		return $luas;
	}
	echo "luas lingkaran = ".luaslingkaran($r1,$PHI). "<br>";
	echo "luas lingkaran = ".luaslingkaran($r2,$PHI). "<br>";

	$luas1 = luaslingkaran($r1,$PHI);
	$luas2 = luaslingkaran($r2,$PHI);

function totalluas2lingkaran($luas1,$luas2)
{
	$luas = $luas1+$luas2;
	return $luas;
}
	echo "total luas 2 lingkaran = ".totalluas2lingkaran($luas1,$luas2);
	


	// echo "Total Luas =". tambahluas2kubus($luas_kb1,$luas_kb2);

	// function hitungluaskubus($sisi)
	// {
	// 	$luas = $sisi1*$sisi2*6;
	// 	return $luas;
	// }
	// function tambahluas2kubus($luas1,$luas2)
	// {
	// 	$total_luas = $luas1+$luas2
	// 	return $total_luas;
	// }
 ?> 