<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "tubes_193040135") or die("Database salah!");

	return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($brg)
{
	$conn = koneksi();
	$nama_barang = htmlspecialchars($brg['nama_barang']);
	$kantor_utama = htmlspecialchars($brg['kantor_utama']);
	$warna = htmlspecialchars($brg['warna']);
	$harga = htmlspecialchars($brg['harga']);
	$merk = htmlspecialchars($brg['merk']);
	$foto = htmlspecialchars($brg['foto']);
	$logo_merk = htmlspecialchars($brg['logo_merk']);

	$query = "INSERT INTO apparel
										VALUES
										('','$foto','$kantor_utama','$warna','$harga','$merk','$nama_barang','$logo_merk')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
// fungsi untuk menghapus data di dalam database
function hapus($no)
{
	$conn = koneksi();
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
	$foto = htmlspecialchars($data['foto']);
	$logo_merk = htmlspecialchars($data['logo_merk']);

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
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
