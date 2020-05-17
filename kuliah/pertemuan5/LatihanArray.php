<?php 
	
	//Array 1 Dimensi
	// $arah = array("Kanan","Kiri","bawah","atas");

	// $arah{2} = "Atas";

	// $arah[] = "Bawah";

	// $arah[1] = "Kanan";

	// $arah[0] = "Kiri";

	// echo "Panjang Array = ".count($arah);
	// echo "<br>";
	// print_r($arah);
	// echo "<br>";

	// for ($i=0; $i < count($arah) ; $i++) { 
	// 	echo "Arah = ".$arah[$i];
	// 	echo "<br>";
	// }
	// echo "<br>";
	// $i = 0;
	// foreach ($arah as $namaarah) {
	// 	echo $namaarah;
	// }

	$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

	echo "Bulan = ".count($bulan);
	echo "<br>";
	print_r($bulan);
	echo "<hr>";

	// echo "<br>";
	// for ($i=0; $i < count($bulan) ; $i++) { 
	// 	echo "Bulan = ".$bulan[$i];
	// 	echo "<br>";
	// }

	$hasil = array_pop($bulan); // Menghapus elemen terakhir
	print_r($bulan);
	echo "<hr>";

	$hasil = array_push($bulan, "Sabtu","minggu"); // Menambah elemen yang ada
	print_r($bulan);
	echo "<hr>";

	$hasil = array_shift($bulan); // MMenghapus elemen pertama
	print_r($bulan);
	echo "<hr>";

	$hasil = array_unshift($bulan, "senin");
	print_r($bulan);
	echo "<hr>";

	$hasil = rsort($bulan); // Mengurutkan dari huruf kecil ke huruf besar dengan urutan dari z-a
	print_r($bulan);
	echo "<hr>";

	$hasil = sort($bulan); // Mengurutkan dari huruf besar ke huruf kecil dengan urutan dari a-z
	print_r($bulan);
	//Arrau multidimensi
	
	// $mahasiswa = array();
	// $mahasiswa [0][0] = "193040135";
	// $mahasiswa [0][1] = "Zhafir";
	// $mahasiswa [1][0] = "Bandung";
	// $mahasiswa [1][1] = "0987654321";

	// print("<pre>".print_r($mahasiswa,true)."</pre>");
	
	// for ($i=0; $i < count($mahasiswa) ; $i++) { 
	// 	for ($j=0; $j < count($mahasiswa); $j++) { 
	// 		echo $mahasiswa[$i][$j];
	// 		echo "<br>";
	// 	}
	// }
 ?>