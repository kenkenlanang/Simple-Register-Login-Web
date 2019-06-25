<!DOCTYPE html>
<?php
session_start();
require_once("auth.php");
?>
<html>
<head>
	<title>Menu 1 Page</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h2>Ini adalah page dari menu 1 (ceritanya)</h2>
		<p>Karna saya bingung isinya apa, jadi ya random saja yha</p>
	</div>
	<div class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
		<a class="navbar-brand" href="index.php">Tutorial</a>
		<button type="button" class="navbar-toggler" data-target="#NavbarCollapser" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="NavbarCollapser">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="menu1.php">Menu 1</a></li>
				<li class="nav-item"><a class="nav-link" href="menu2.php">Menu 2</a></li>
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Menu 3</a>
					<div class="dropdown-menu">
					<?php
				
					if(!isset($_SESSION["user"])) {
					?>
						<a class="dropdown-item" href="reglog.php">Register / Login</a>
					<?php } else { ?>
						<a class="dropdown-item" href="logout.php">Logout</a>
					<?php } ?>
						<a class="dropdown-item" href="portofolio.php">Portofolio</a>
						<a class="dropdown-item" href="about.php">About Us</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="container" style="margin-top:25px">
		<div class="row">
			<div class="col-sm-4">
				<h3>GAME Section</h3>
				<p>Tulisan dulu aja semua ya</p>
				<h3>GAME Section</h3>
				<p>Tulisan dulu aja semua ya</p>
				<h3>GAME Section</h3>
				<p>Tulisan dulu aja semua ya</p>
				<ul class="nav nav-pills flex-column">
					<h3>Mari Belajar BADWORD</h3>
					<p>Dengan mengklik link ini, kalian bisa belajar badword dalam beberapa bahasa di dunia</p>
					<li class="nav-item"><a class="nav-link" href="#">B. Rusia</a></li>
					<li class="nav-item"><a class="nav-link" href="#">B. Zimbabwe</a></li>
					<li class="nav-item"><a class="nav-link" href="#">B. Spanyol</A></li>
					<li class="nav-item"><a class="nav-link disabled" href="#">B. Filipina</a></li>
				</ul>
			</div>
			<div class="col-sm-4">	
				<h3>NEWS Section</h3>
				<h4>Kabar Terbaru Kaesang, Kaesang senang dibully Netizen</h4>
				<p>Kaesang dikabarkan senang dibully Netizen, yang dimana itu adalah salah satu sifat masokis. Kaesang
				senang dibully netizen karna Kaesang suka dibully karna Kaesang hanya terkenal dari situ Kappa</p>
				
				<h4>VIRAL! Gay dari Bogor menggegerkan dunia maya</h4>
				<p>Banyak sekali postingan di sosial media baik di Instagram, Facebook, dan lain-lain sedang banyak
				men-share postingan gay yang diduga dari Bogor. Banyak juga meme maupun berita-berita gay yang berasal dari bogor</p>
				
				<h4>ARAP NGAMOOK! Arap kesal dengan viewer livestream-nya</h4>
				<p>Reza Arap a.k.a Reza Oktovian sangat kesal dengan viewer livestream saat dia men-livestream DOTA2, banyak viewer
				toxic yang membuat Arap ngamuk sampai-sampai berjanji tidak akan livestream DOTA2 dan hanya akan livestream yang 
				dia suka saja</p>
			
			</div>
			<div class="col-sm-4">	
				<h3>RANDOM Section</h3>
				<p>Tulisan dulu aja semua ya</p>
			
			</div>
		</div>
	</div>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h4>Ini bagian footer ceritanya juga</h4>
	</div>
</body>