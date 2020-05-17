<?php 
	// echo "ini hasilnya";
	// echo "<hr>";
	// // echo "username: "$_GET['username']."<br>";
	// // echo "password: "$_GET['password']."<br>";
	
	// function ceklogin($username,$password) {
	// 	if ($username == "asd" && $password="123") {
	// 		echo "berhasil login";
	// 	} else {
	// 	echo "Gagal login";
	// 	}
	// }

	// //eksekusi
	// $username = $_GET['username'];
	// $password = $_GET['password'];
	// ceklogin($username,$password);
	
	// function perhitungan($angka1,$angka2) {
	// 	if ($angka1 + $angka2) {
	// 		echo $angka1 + $angka2;
	// 	} else {
	// 	echo "Gagal login";
	// 	}

	// 	$angka1 = $_GET['angka1'];
	// 	$angka2 = $_GET['angka2'];
	// 	perhitungan($angka1,$angka2)



	// }
		if ($username == "admin" && $password == "12345") {
			echo "Selamat Datang Admin";
		} else{
			echo "Username / Password salah";
		}
	}

	$username = $_POST['username'];
	$password = $_POST['password'];
 ?>