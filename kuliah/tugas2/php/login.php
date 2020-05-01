<?php
session_start();
require 'functions.php';

//melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="background: -webkit-linear-gradient(bottom, royalblue, lightgreen); color:black;">
  <div class="kotak_login">
    <div class="content">
      <p class="tulisan_login">LOGIN</p>
      <div class="underline-title"></div>
    </div>
    <form action="" method="post" class="login">
      <?php if (isset($error)) : ?>
        <p style="color: red; font-style: comic sans ms;">Username atau Password salah</p>
      <?php endif; ?>
      <label for="username" style="padding-top:13px;">&nbsp; Username</label>
      <input type="text" name="username" class="form-content">
      <div class="form-border"></div>


      <label for="password" style="padding-top:22px">&nbsp; Password</label>
      <input type="password" name="password" class="form-content">
      <div class="form-border"></div>
      <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
      </div>
      <button type="submit" name="submit" class="tombol_login">login</button>
      <div class="registrasi">
        <p>Belum punya akun? Registrasi<a href="registrasi.php" class="disini"> disini</a></p>
      </div>
    </form>
  </div>
</body>

</html>