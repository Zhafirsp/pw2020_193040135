<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "tubes_193040135") or die("Database salah!");
	return mysqli_connect('localhost', 'root', '', 'tubes_193040135');

	return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");


	//jika hasilnya  hanya 1 data
	if (mysqli_num_rows($result) == 1) {
		return mysqli_fetch_assoc($result);
	}

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

// fungsi upload foto
function uploadFoto()
{
	$nama_file = $_FILES['foto']['name'];
	$tipe_file = $_FILES['foto']['type'];
	$ukuran_file = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmp_file = $_FILES['foto']['tmp_name'];

	//ketika tidak ada gambar yang dipilih
	if ($error == 4) {
		// echo "<script>
		//         alert('pilih gambar terlebih dahulu');
		//       </script>";
		return 'no-image.png';
	}

	//cek extension file
	$daftar_gambar = ['jpg', 'jpeg', 'png'];
	$ekstensi_file = explode('.', $nama_file);
	$ekstensi_file = strtolower(end($ekstensi_file));
	if (!in_array($ekstensi_file, $daftar_gambar)) {
		echo "<script>
            alert('yang anda pilih bukan gambar!');
         </script>";
		return false;
	}

	//cek type file
	if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
		echo "<script>
             alert('yang anda pilih bukan gambar!');
          </script>";
		return false;
	}

	//cek ukuran file
	//maksimal 5mb = 5000000
	if ($ukuran_file > 5000000) {
		echo "<script>
           alert('ukuran file terlalu besar');
          </script>";
		return false;
	}

	//jika lolos pengecekan ukuran dan tipe file
	//siap upload file
	//generate nama file baru
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi_file;
	move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

	return $nama_file_baru;
}
// fungsi upload Logo
function uploadLogo()
{
	$nama_file = $_FILES['logo_merk']['name'];
	$tipe_file = $_FILES['logo_merk']['type'];
	$ukuran_file = $_FILES['logo_merk']['size'];
	$error = $_FILES['logo_merk']['error'];
	$tmp_file = $_FILES['logo_merk']['tmp_name'];

	//ketika tidak ada gambar yang dipilih
	if ($error == 4) {
		// echo "<script>
		//         alert('pilih gambar terlebih dahulu');
		//       </script>";
		return 'no-image.png';
	}

	//cek extension file
	$daftar_gambar = ['jpg', 'jpeg', 'png'];
	$ekstensi_file = explode('.', $nama_file);
	$ekstensi_file = strtolower(end($ekstensi_file));
	if (!in_array($ekstensi_file, $daftar_gambar)) {
		echo "<script>
            alert('yang anda pilih bukan gambar!');
         </script>";
		return false;
	}

	//cek type file
	if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
		echo "<script>
             alert('yang anda pilih bukan gambar!');
          </script>";
		return false;
	}

	//cek ukuran file
	//maksimal 5mb = 5000000
	if ($ukuran_file > 5000000) {
		echo "<script>
           alert('ukuran file terlalu besar');
          </script>";
		return false;
	}

	//jika lolos pengecekan ukuran dan tipe file
	//siap upload file
	//generate nama file baru
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi_file;
	move_uploaded_file($tmp_file, '../assets/logo/' . $nama_file_baru);

	return $nama_file_baru;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
	$conn = koneksi();

	$nama_barang = htmlspecialchars($data['nama_barang']);
	$kantor_utama = htmlspecialchars($data['kantor_utama']);
	$warna = htmlspecialchars($data['warna']);
	$harga = htmlspecialchars($data['harga']);
	$merk = htmlspecialchars($data['merk']);
	// $foto = htmlspecialchars($data['foto']);
	// $logo_merk = htmlspecialchars($data['logo_merk']);

	// upload foto dan logo
	$foto = uploadFoto();
	if (!$foto) {
		return false;
	}
	$logo_merk = uploadLogo();
	if (!$logo_merk) {
		return false;
	}
	$query = "INSERT INTO apparel
VALUES
(null,'$foto','$kantor_utama','$warna','$harga','$merk','$nama_barang','$logo_merk')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data di dalam database
function hapus($no)
{
	$conn = koneksi();
	// menghapus foto di folder
	$brg = query("SELECT * FROM apparel WHERE no = $no");
	if ($brg['foto'] != 'no-image.png') {
		unlink('../assets/img/' . $brg['foto']);
	}
	// menghapus logo di folder
	$brg = query("SELECT * FROM apparel WHERE no = $no");
	if ($brg['logo_merk'] != 'no-image.png') {
		unlink('../assets/logo/' . $brg['logo_merk']);
	}

	mysqli_query($conn, "DELETE FROM apparel WHERE no = $no");

	return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data di dalam database
function ubah($data)
{
	$conn = koneksi();
	$no = htmlspecialchars($data['no']);
	$nama_barang = htmlspecialchars($data['nama_barang']);
	$kantor_utama = htmlspecialchars($data['kantor_utama']);
	$warna = htmlspecialchars($data['warna']);
	$harga = htmlspecialchars($data['harga']);
	$merk = htmlspecialchars($data['merk']);
	$foto_lama = htmlspecialchars($data['foto_lama']);
	$logo_merk_lama = htmlspecialchars($data['logo_merk_lama']);

	$foto = uploadFoto();
	if (!$foto) {
		return false;
	}

	if ($foto == 'no-image.png') {
		$foto = $foto_lama;
	}

	$logo_merk = uploadLogo();
	if (!$logo_merk) {
		return false;
	}

	if ($logo_merk == 'no-image.png') {
		$logo_merk = $logo_merk_lama;
	}

	$query = "UPDATE apparel 
					SET
					foto = '$foto',
					kantor_utama = '$kantor_utama',
					warna = '$warna',
					harga = '$harga',
					merk = '$merk',
					nama_barang = '$nama_barang',
					logo_merk = '$logo_merk'
					WHERE no = $no
					";
	mysqli_query($conn, $query) or die(mysqli_error($conn));
	echo mysqli_error($conn);

	return mysqli_affected_rows($conn);
}

// fungsi cari
function cari($keyword)
{
	$conn = koneksi();

	$query = "SELECT * FROM apparel 
            WHERE nama_barang LIKE '%$keyword%' OR
            merk LIKE '%$keyword%' ";

	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// fungsi login
function login($data)
{
	$conn = koneksi();
	$username = htmlspecialchars($data['username']);
	$password = htmlspecialchars($data['password']);

	//cek dulu username
	if ($user = query("SELECT * FROM user WHERE username = '$username'")) {

		if (password_verify($password, $user['password'])) {
			//set session
			$_SESSION['login'] = true;

			header("Location: index.php");
			exit;
		}
	}
	return [
		'error' => true,
		'pesan' => 'Username atau Password salah!'
	];
}

// fungsi untuk registrasi
function registrasi($data)
{
	$conn = koneksi();
	$username = strtolower(stripcslashes($data["username"]));
	$password1 = mysqli_real_escape_string($conn, $data["password1"]);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);

	//jika username / password kosong
	if (empty($username) || empty($password1) || empty($password2)) {
		echo "<script>
            alert('username atau password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";

		return false;
	}

	//jika username sudah ada
	if (query("SELECT * FROM user WHERE username = '$username' ")) {
		echo "<script>
    alert('username sudah terdaftar!');
    document.location.href = 'registrasi.php';
  </script>";

		return false;
	}
	//jika konfirmasi password tidak sesuai
	if ($password1 !== $password2) {
		echo "<script>
      alert('Konfirmasi password tidak sesuai!');
      document.location.href = 'registrasi.php';
    </script>";

		return false;
	}

	//jika password < 5 digit
	if (strlen($password1) < 5) {
		echo "<script>
    alert('password minimal 5 digit!');
    document.location.href = 'registrasi.php';
  </script>";

		return false;
	}

	//jika password < 5 digit
	if (strlen($username) < 5) {
		echo "<script>
    alert('username minimal 5 digit!');
    document.location.href = 'registrasi.php';
  </script>";

		return false;
	}

	//jika username & password sudah sesuai
	//enskripsi password
	$password_baru = password_hash($password1, PASSWORD_DEFAULT);

	//INSERT KE TABLE USER
	$query = "INSERT INTO user
              VALUES
              (null, '$username', '$password_baru')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}
