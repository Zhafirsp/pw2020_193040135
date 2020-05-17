<?php
	$r1 = 7;
	$r2 = 9;
	$PHI = 3.14;
 function luaslingkaran($r,$PHI)
	
	{
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
 ?>