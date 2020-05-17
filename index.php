<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- my CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- icon -->
  <link rel="icon" href="assets/img/Logo.png">

  <title>Index</title>

</head>

<body id="home" class="scrollspy">
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="black">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="img"><img src="assets/img/f.png" width="6.5%"></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About</a></li>
            <li><a href="#kuliah">Kuliah</a></li>
            <li><a href="#prak">Praktikum</a></li>
            <li><a href="#tubes">Tugas Besar</a></li>
            <li>
              <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- slider -->
  <div class="parallax-container">
    <div class="parallax"><img src="assets/img/torus.png"></div>
    <div class="caption center-align">
      <h2 class="text-lighten-3" style="margin-top: 220px;">Selamat Datang di<br><span class="light red-text"> Halaman Index</span> Saya</h2>
    </div>
  </div>


  <!-- sidenav -->
  <ul class="sidenav " id="mobile-nav">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="assets/img/z.jpg">
        </div>
        <a href="#user"><img class="circle rounded" src="assets/img/as.png"></a>
        <a href="#name"><span class="white-text name">Muhammad Zhafir Sunandy Pramana</span></a>
        <a href="#email"><span class="white-text email">193040135.muhammad.@mail.unpas.ac.id</span></a>
      </div>
    </li>
    <li><a href="#isi">Kuliah</a></li>
    <li><a href="#isi">Praktikum</a></li>
    <li><a href="#isi">Tugas Besar</a></li>
    <li><a href="#isi">Contact</a></li>
  </ul>


  <!-- About Me -->
  <section id="about" class="about scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center text-lighten-3">About Me</h3>
        <div class="col m12 s12 center">
          <h5>I'm Zhafir student from Pasundan University. Bandung, Indonesia</h5>
          <p>I love the logic and structure of coding and always strive to write elegant and efficient code</p>
          <a href="http://www.facebook.com/zhafir.spramana" target="_blank">
            <img class="alignleft size-full wp-image-664" src="assets/img/fb.png" alt="" width="75" height="75" />
            <a href="https://twitter.com/zhafirsp" target="_blank">
              <img class="alignleft size-full wp-image-664" src="assets/img/Twitter.png" alt="" width="75" height="75" />
            </a>
            <a href="https://www.instagram.com/zhafirsp/" target="_blank">
              <img class="alignleft size-full wp-image-664" src="assets/img/ig.png" alt="" width="75" height="75" />
            </a>
        </div>
      </div>
    </div>
  </section>


  <!-- isi -->
  <section id="isi" class="parallax-container scrollspy">
    <div class="parallax"><img src="assets/img/a.jpg" alt=""></div>
    <div class="container">
      <h3 style="text-align:center; margin-top:-10px;">Menu</h3>
      <div class="row">
        <div class=" table-isi col m12 s12 responsive-table" width="200px;" heigth="500px;">
          <table class="highlight responsive-table centered">
            <thead>
              <tr>
                <th id="kuliah" class="text-lighten-3">Kuliah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="kuliah/pertemuan1/hello.php" class="waves-effect waves-light btn-small black">Pertemuan1</a></td>
                <td><a class='dropdown-trigger btn black ' href='#' data-target='dropdown1'>pertemuan2</a>
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="kuliah/pertemuan2/latihan1a.php">Latihan 1a</a></li>
                    <li> <a href="kuliah/pertemuan2/latihan1b.php">Latihan 1b </a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li> <a href="kuliah/pertemuan2/latihan1c.php">Latihan 1c</a></li>
                    <li><a href="kuliah/pertemuan2/tipedata.php">Tipe Data</a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn black' href='#' data-target='dropdown2'>pertemuan3</a>
                  <ul id='dropdown2' class='dropdown-content'>
                    <li><a href="kuliah/pertemuan3/a.php">A </a></li>
                    <li><a href="kuliah/pertemuan3/dowhile.php">Do While </a></li>
                    <li><a href="kuliah/pertemuan3/latihan2a.php">Latihan 2a </a></li>
                    <li><a href="kuliah/pertemuan3/latihan2b.php">Latihan 2b </a></li>
                    <li><a href="kuliah/pertemuan3/latihan2c.php">Latihan 2c </a></li>
                    <li><a href="kuliah/pertemuan3/latihan2d.php">Latihan 2d </a></li>
                    <li><a href="kuliah/pertemuan3/latihan2e.php">Latihan 2e </a></li>
                    <li><a href="kuliah/pertemuan3/pengkondisian_switch.php">Pengkondisian Switch </a></li>
                    <li><a href="kuliah/pertemuan3/pengkondisian_ternary.php">Pengkondisian Ternary </a></li>
                    <li><a href="kuliah/pertemuan3/pengkondisian.php">Pengkondisian </a></li>
                    <li><a href="kuliah/pertemuan3/pengulangan.php">Pengulangan </a></li>
                    <li><a href="kuliah/pertemuan3/php.php">PHP</a></li>
                    <li><a href="kuliah/pertemuan3/while.php">While </a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn black' href='#' data-target='dropdown3'>pertemuan4</a>
                  <ul id='dropdown3' class='dropdown-content'>
                    <li><a href="kuliah/pertemuan4/HitungKubus.php">Hitung Kubus </a></li>
                    <li><a href="kuliah/pertemuan4/HitungLingkaran.php">Hitung Lingkaran </a></li>
                    <li><a href="kuliah/pertemuan4/Latihan4.php">Latihan 4 </a></li>
                    <li><a href="kuliah/pertemuan4/StringFunction.php">String Function </a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn black' href='#' data-target='dropdown4'>pertemuan5</a>
                  <ul id='dropdown4' class='dropdown-content'>
                    <li><a href="kuliah/pertemuan5/arrayasosiatf.php">Array Asosiatif </a></li>
                    <li><a href="kuliah/pertemuan5/LatihanArray.php">Latihan Array </a></li>
                    <li><a href="kuliah/pertemuan5/LatihanArrayAsosiatif.php">Latihan Array Asosiatif </a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn black' href='#' data-target='dropdown5'>pertemuan7</a>
                  <ul id='dropdown5' class='dropdown-content'>
                    <li><a href="kuliah/pertemuan7/contohkalkulator.php">Contoh Kalkulator </a></li>
                    <li><a href="kuliah/pertemuan7/form.php">Form </a></li>
                    <li><a href="kuliah/pertemuan7/result.php">Result </a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn black' href='#' data-target='dropdown6'>pertemuan9</a>
                  <ul id='dropdown6' class='dropdown-content'>
                    <li><a href="kuliah/pertemuan9/pw_193040135.sql">SQL PW </a></li>
                    <li><a href="kuliah/pertemuan9/tubes_193040135(1).sql">SQL Tubes </a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td><a class='dropdown-trigger btn black' href='#' data-target='dropdown7'>pertemuan10</a>
                  <ul id='dropdown7' class='dropdown-content'>
                    <li><a href="kuliah/pertemuan10/latihan1.php">Latihan 1 </a></li>
                    <li><a href="kuliah/pertemuan10/latihan2.php">Latihan 2 </a></li>
                    <li><a href="kuliah/pertemuan10/latihan3.php">Latihan 3 </a></li>
                  </ul>
                </td>
                <td><a href="kuliah/pertemuan11/index.php" class="waves-effect waves-light btn black">Pertemuan11 </a></td>
                <td><a href="kuliah/pertemuan12/index.php" class="waves-effect waves-light btn black">Pertemuan12 </a></td>
                <td><a href="kuliah/pertemuan13/index.php" class="waves-effect waves-light btn black">Pertemuan13 </a></td>
              </tr>
              <thead>
                <tr>
                  <th id="prak" class="text-lighten-3">Praktikum</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td><a class='dropdown-trigger btn white black-text' href='#' data-target='dropdown8'>pertemuan1</a>
                  <ul id='dropdown8' class='dropdown-content'>
                    <li><a href="praktikum/p1_PW_193040135/latihan1a.php">Latihan 1a </a></li>
                    <li><a href="praktikum/p1_PW_193040135/latihan1b.php">Latihan 1b </a></li>
                    <li><a href="praktikum/p1_PW_193040135/latihan1c.php">Latihan 1c </a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn white black-text' href='#' data-target='dropdown9'>pertemuan2</a>
                  <ul id='dropdown9' class='dropdown-content'>
                    <li><a href="praktikum/p2_PW_193040135/latihan2a.php">Latihan 2a </a></li>
                    <li><a href="praktikum/p2_PW_193040135/latihan2b.php">Latihan 2b </a></li>
                    <li><a href="praktikum/p2_PW_193040135/latihan2c.php">Latihan 2c </a></li>
                    <li><a href="praktikum/p2_PW_193040135/tugas1.php">Tugas 1 </a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn white black-text' href='#' data-target='dropdown10'>pertemuan3</a>
                  <ul id='dropdown10' class='dropdown-content'>
                    <li><a href="praktikum/p3_PW_193040135/Latihan3a.php">Latihan 3a </a></li>
                    <li><a href="praktikum/p3_PW_193040135/Latihan3b.php">Latihan 3b </a></li>
                    <li><a href="praktikum/p3_PW_193040135/Latihan3c.php">Latihan 3c </a></li>
                    <li><a href="praktikum/p3_PW_193040135/Latihan3d.php">Latihan 3d</a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn white black-text' href='#' data-target='dropdown11'>pertemuan4</a>
                  <ul id='dropdown11' class='dropdown-content'>
                    <li><a href="praktikum/p4_PW_193040135/Latihan4a.php">Latihan 4a </a></li>
                    <li><a href="praktikum/p4_PW_193040135/Latihan4b.php">Latihan 4b </a></li>
                    <li><a href="praktikum/p4_PW_193040135/Latihan4c.php">Latihan 4c </a></li>
                    <li><a href="praktikum/p4_PW_193040135/Latihan4d.php">Latihan 4d</a></li>
                    <li><a href="praktikum/p4_PW_193040135/Tugas2.php">Tugas 2</a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn white black-text' href='#' data-target='dropdown12'>pertemuan5</a>
                  <ul id='dropdown12' class='dropdown-content'>
                    <li><a href="praktikum/p5_PW_193040135/latihan5a/index.php">Pertemuan 5a</a></li>
                    <li><a href="praktikum/p5_PW_193040135/latihan5b/index.php">Pertemuan 5b</a></li>
                    <li><a href="praktikum/p5_PW_193040135/latihan5c/index.php">Pertemuan 5c</a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn white black-text' href='#' data-target='dropdown13'>pertemuan6</a>
                  <ul id='dropdown13' class='dropdown-content'>
                    <li><a href="praktikum/p6_PW_193040135/latihan6a/index.php">Latihan 6a</a></li>
                    <li><a href="praktikum/p6_PW_193040135/latihan6b/index.php">Latihan 6b</a></li>
                    <li><a href="praktikum/p6_PW_193040135/latihan6c/index.php">Latihan 6c</a></li>
                    <li><a href="praktikum/p6_PW_193040135/latihan6d/index.php">Latihan 6d</a></li>
                    <li><a href="praktikum/p6_PW_193040135/latihan6e/index.php">Latihan 6e</a></li>
                    <li><a href="praktikum/p6_PW_193040135/latihan6f/index.php">Tugas</a></li>
                  </ul>
                </td>
                <td><a class='dropdown-trigger btn white black-text' href='#' data-target='dropdown14'>pertemuan7</a>
                  <ul id='dropdown14' class='dropdown-content'>
                    <li><a href="praktikum/p7_PW_193040135/latihan7a/index.php">Latihan 7a</a></li>
                    <li><a href="praktikum/p7_PW_193040135/latihan7b/index.php">Latihan 7b</a></li>
                    <li><a href="praktikum/p7_PW_193040135/latihan7c/index.php">Latihan 7c</a></li>
                </td>
              </tr>
              <thead>
                <tr>
                  <th id="tubes" class="text-lighten-3">Tugas Besar</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td><a href="tubes/tubes_193040135/index.php" class="waves-effect waves-light btn-small black">Tugas Besar</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <div class="fixed-action-btn">
    <a class="btn-floating btn red" href="#home"><i class="material-icons">arrow_upward</i></a>
  </div>

  <!--JavaScript-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

  <!-- footer -->
  <footer class="light black white-text center">
    <p class="flow-text"> &copy;Copyright Muhammad Zhafir Sunandy Pramana 2020 </p>
  </footer>
</body>

</html>