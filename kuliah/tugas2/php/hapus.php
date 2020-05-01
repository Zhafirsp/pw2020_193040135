<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
$no = $_GET['no'];

if (hapus($no) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = 'admin.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = 'admin.php';
        </script>";
}
