<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal');
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body style="background: -webkit-linear-gradient(bottom, royalblue, lightgreen); color:black;">
  <div class="kotak_login">
    <div class="content">
      <p class="tulisan_login">Registrasi</p>
      <div class="underline-title"></div>
    </div>
    <form action="" method="post" class="login">
      <table>
        <tr>
          <td><label for="username">username</label></td>
          <td>:</td>
          <td><input type="text" name="username" class="form-content"></td>
        </tr>
        <tr>
          <td><label for="password">password</label></td>
          <td>:</td>
          <td><input type="password" name="password1" class="form-content"></td>
        </tr>
        <tr>
          <td><label for="password">Konfirmasi password</label></td>
          <td>:</td>
          <td><input type="password" name="password2" class="form-content"></td>
        </tr>
      </table>
      <button type="submit" name="register" class="tombol_login">REGISTER</button>
    </form>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>