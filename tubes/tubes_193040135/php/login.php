<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan Username dan Password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

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
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
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

      <label for="password" style="padding-top:22px">&nbsp; Password</label>
      <input type="password" name="password" class="form-content">

      <div class="remember">
              <label>
                <input type="checkbox">
                <span>Remember Me</span>
              </label>
            </div>
      <button type="submit" name="login" class="tombol_login">login</button>
      <div class="registrasi">
        <p>Belum punya akun? Registrasi<a href="registrasi.php" class="disini"> disini</a></p>
      </div>
    </form>
  </div>
  
  <script src="../js/materialize.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>