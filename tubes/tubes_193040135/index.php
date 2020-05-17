 <?php

	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$apparel = query("SELECT * FROM apparel");

	//ketika tombol cari di klik
	if (!empty($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$apparel = query("SELECT * FROM apparel WHERE 
              nama_barang LIKE '%$keyword%' OR
              merk LIKE '%$keyword%'");
	} else {
		$apparel = query("SELECT * FROM apparel");
	}
	?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="UTF-8">
 	<title>Tugas Besar</title>
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
 </head>

 <body id="home" class="home scrollspy">
 	<!-- navbar -->
 	<div class="navbar-fixed">
 		<nav class="black">
 			<div class="container">
 				<div class="nav-wrapper">
 					<a href="#!"><img src="assets/img/f.png" style="width: 65px;"></a>
 					<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
 					<ul class="right hide-on-med-and-down">
 						<li>
 							<form action="" method="POST">
 								<input type="text" name="keyword" placeholder="Search" autocomplete="off" autofocus class="keyword" style="color: white">
 								<button type="submit" name="cari" class="tombol-cari">cari</button>
 							</form>
 						</li>
 						<li><a href="../../index.php">Home</a></li>
 						<li><a href="#catalog">Catalog</a></li>
 						<li><a href="#contact">Contact</a></li>
 						<li><a href="php/login.php">Login For Admin</li>
 					</ul>
 				</div>
 			</div>
 		</nav>
 	</div>

 	<!-- sidenav -->
 	<ul class=" sidenav black" id="mobile-nav">
 		<li><a href="../../index.php" class="white-text">Home</a></li>
 		<li><a href="#catalog" class="white-text">Catalog</a></li>
 		<li><a href="#brand" class="white-text">Brand</a></li>
 		<li>
 			<form action="" method="GET">
 				<input type="text" name="keyword" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus class="keyword" style="color: white">
 				<button type="submit" name="cari" class="tombol-cari">cari</button>
 			</form>
 		</li>
 	</ul>
 	<!-- parallax -->
 	<div class="slider">
 		<ul class="slides">
 			<li>
 				<img src="assets/img/z (1).jpg">
 				<div class="caption right-align">
 					<h2 class="text-lighten-3"><span class="light red-text">Best </span>Way to Find <span class="light blue-text">Your Best </span> <span class="light black-text">Style.</span></h2>
 				</div>
 			</li>
 			<li>
 				<img src="assets/img/z (2).jpg">
 				<div class="caption center-align">
 					<h2 class="text-lighten-3"> With a Lot <br><span class="light red-text">Brand</span> and<span class="light blue-text"> Models.</span></h2>
 				</div>
 			</li>
 			<li>
 				<img src="assets/img/z (3).jpg">
 				<div class="caption">
 					<h2 class="text-lighten-3">Easy to <br><span class="light blue-text">Buy </span><span class="light black-text">And </span><span class="light red-text">Shipping</span> <span class="light black-text">World Wide!.</span></h2>
 				</div>
 			</li>
 		</ul>
 	</div>
 	<hr>

 	<section id="catalog" class="scrollspy">
 		<h3 class="center">Menu</h3>
 		<div class="underline-title-index"></div>
 		<div class="col m6 s12 ">
 			<div class="container">
 				<table class="highlight responsive-table centered">
				 <div class="big">
 					<?php if (empty($apparel)) : ?>
 						<tbody>
 							<tr>
 								<td colspan="7">
 									<h1>Data tidak ditemukan</h1>
 								</td>
 							</tr>
 						<?php else : ?>
 							<div class="row">
 								<?php $i = 1; ?>
 								<?php foreach ($apparel as $brg) : ?>
 									<div class="col s12 m3">
 										<div class="card" style="height:500px; width:auto;">
 											<div class="card-image">
 												<img src="assets/img/<?= $brg['foto']; ?>" class="foto materialboxed">
 												<a class="link btn-floating halfway-fab waves-effect waves-light red" href="php/detail.php?no=<?= $brg['no'] ?>"><i class=" material-icons">details</i></a>
 											</div>
 											<div class="card-content">
 												<p class="nama">
 													<a class="link" href="php/detail.php?no=<?= $brg['no'] ?>">
 														<?= $brg["nama_barang"] ?>
 													</a>
 												</p>
 											</div>
 										</div>
 									</div>
 								<?php endforeach; ?>
 							</div>
 						<?php endif; ?>
						 </div>
 						</tbody>
 				</table>
 			</div>
 		</div>
 	</section>

 	<!-- Brand -->
 	<section id="brand" class="brand scrollspy">
 		<div class="parallax-container">
 			<div class="parallax black"><img src="assets/img/a.jpg"></div>
 			<div class="container">
 				<div class="row">
 					<h2 class="text-lighten-3" style="margin-bottom:50px;"><span class="light red-text"> Brand</span></h2>
 					<div class="col m2 s12 center"><img src="assets/logo/ysl.png"></div>
 					<div class="col m3 s12 center"><img src="assets/logo/bbc.png"></div>
 					<div class="col m2 s12 center"><img src="assets/logo/conv.png"></div>
 					<div class="col m3 s12 center"><img src="assets/logo/nike.png"></div>
 					<div class="col m2 s12 center"><img src="assets/logo/sd.png"></div>
 				</div>
 				<br>
 				<div class="row">
 					<div class="col m3 s12 center"><img src="assets/logo/phillip.png"></div>
 					<div class="col m3 s12 center"><img src="assets/logo/qs.png"></div>
 					<div class="col m3 s12 center"><img src="assets/logo/vet.png"></div>
 					<div class="col m3 s12 center"><img src="assets/logo/mango.png"></div>
 				</div>
 			</div>
 		</div>
 	</section>
 	<!-- contact me -->
 	<section id="contact" class="contact scrollspy">
 		<div class="container">
 			<h3 class="light black-text text-darken-3 center">Contact Me</h3>
 			<div class="underline-title-index"></div>
 			<div class="row">
 				<div class="col m5 s12">
 					<div class="card-panel white center black-text">
 						<i class="material-icons">email</i>
 						<h5>Contact Me</h5>
 						<p><a href="tel:+6282213302003">Phone</a></p>
 						<p><a href="mailto:zhafirsp@gmail.com?subject=Subject atau judul disini">Email</a></p>
 					</div>
 					<ul class="collection with-header">
 						<li class="collection-header">
 							<h4>My Home</h4>
 						</li>
 						<li class="collection-item">Muhammad Zhafir</li>
 						<li class="collection-item">Pasir Maung Cijayanti, Babakan Madang</li>
 						<li class="collection-item">West Java, Indonesia</li>
 					</ul>
 					<div class="col s12 m12" id="maps">
 						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.8679265274586!2d106.85166882918271!3d-6.588138999702217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzUnMTcuMyJTIDEwNsKwNTEnMDguMCJF!5e0!3m2!1sen!2sid!4v1589256964143!5m2!1sen!2sid" width="390" height="300" frameborder="0" style="border:0; border-radius: 6px; box-shadow: 2px 2px 4px black;" allowfullscreen></iframe>
 					</div>
 				</div>

 				<div class="col m7 s12 center">
 					<form>
 						<div class="card-panel">
 							<h5>Please Fill Out This Form</h5>
 							<div class="input-field">
 								<i class="material-icons prefix">account_circle</i>
 								<input type="text" name="name" id="name" required class="validate">
 								<label for="name">Name</label>
 								<div class="input-field">
 									<i class="material-icons prefix">email</i>
 									<input type="email" name="email" id="email" required class="validate">
 									<label for="email">Email</label>
 									<div class="input-field">
 										<i class="material-icons prefix">phone</i>
 										<input type="text" maxlength="13" onkeypress="return hanyaAngka(event)" />
 										<label for="phone">Phone Number</label>
 										<div class="input-field">
 											<i class="material-icons prefix">message</i>
 											<textarea name="message" id="message" class="materialize-textarea"></textarea>
 											<label for="message">Message</label>
 										</div>
 										<button type="submit" class="btn black">Send</button>
 									</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</section>

 	<div class="fixed-action-btn">
 		<a class="btn-floating btn-large red">
 			<i class="medium material-icons">info</i>
 		</a>
 		<ul>
 			<li> <a href="#home" class="btn-floating orange"> <i class="material-icons">arrow_back</i></a></li>
 			<li><a class="btn-floating red"><i class="material-icons" href="tel:+6282213302003">call</i>Call</a></li>
 			<li><a class="btn-floating yellow darken-1" href="mailto:zhafirsp@gmail.com?subject=Subject atau judul disini" target="_blank"><i class="material-icons">mail</i>Email</a></li>
 			<li><a class="btn-floating green" href="https://wa.me/6282213302003" target="_blank"><i class="material-icons">phone_in_talk</i>whatsapp</a></li>
 			<li><a class="btn-floating blue" href="#home"><i class="material-icons">arrow_upward</i></a></li>
 		</ul>
 	</div>

 	<!-- footer -->
 	<footer class="page-footer light black white-text">
 		<div class="container">
 			<div class="row">
 				<div class="col l4 m4 s12">
 					<h5 class="white-text">IKUTI KAMI</h5>
 					<ul>
 						<li><a class="grey-text text-lighten-3" href="https://www.instagram.com/zhafirsp/">INSTAGRAM</a></li>
 						<li><a class="grey-text text-lighten-3" href="http://www.facebook.com/zhafir.spramana">FACEBOOK </a> </li>
 						<li><a class="grey-text text-lighten-3" href="https://twitter.com/zhafirsp">TWITTER</a></li>
 						<li><a class="grey-text text-lighten-3" href="#!">PINTEREST</a></li>
 					</ul>
 				</div>
 				<div class="col l4 m4 s12">
 					<h5 class="white-text">PERUSAHAAN</h5>
 					<ul>
 						<li><a class="grey-text text-lighten-3" href="#home">TENTANG KAMI</a></li>
 						<li><a class="grey-text text-lighten-3" href="#!">KANTOR</a></li>
 						<li><a class="grey-text text-lighten-3" href="#!">TOKO</a></li>
 					</ul>
 				</div>
 				<div class="col l4 m4 s12">
 					<h5 class="white-text">KEBIJAKAN</h5>
 					<ul>
 						<li><a class="grey-text text-lighten-3" href="#!">KEBIJAKAN PRIVASI</a></li>
 						<li><a class="grey-text text-lighten-3" href="#!">SYARAT MEMBELI</a></li>
 					</ul>
 				</div>
 			</div>
 		</div>
 		<div class="footer-copyright">
 			<div class="container">
 				© 2014 Muhammad Zhafir Sunandy Pramana, All rights reserved.
 				<a class="grey-text text-lighten-4 right" href="#!"> ENGLISH </a>
 				<a class="grey-text text-lighten-4 right"> | </a>
 				<a class="grey-text text-lighten-4 right" href="#!">BAHASA INDONESIA </a>
 			</div>
 		</div>
 	</footer>

 	<!--JavaScript-->
 	<script type="text/javascript" src="js/materialize.min.js"></script>
 	<script type="text/javascript" src="js/script.js"></script>


 </body>

 </html>