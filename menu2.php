<!DOCTYPE html>
<?php
session_start();
require_once("auth.php");
?>
<html>
<head>
	<title>Menu 2 Page</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h2>Ini adalah page dari menu 2 (ceritanya)</h2>
		<p>Masih kentang webnya, ini juga masih niru web sederhana kok :((</p>
	</div>
	<div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<a class="navbar-brand" href="index.php">Tutorial</a>
		<button type="button" class="navbar-toggler" data-target="#NavbarCollapser" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="NavbarCollapser">
			<ul class="navbar-nav">
				<li class="nav-item"><A class="nav-link" href="menu1.php">Menu 1</a></li>
				<li class="nav-item"><A class="nav-link" href="menu2.php">Menu 2</a></li>
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Menu 3</a>
					<div class="dropdown-menu">
					<?php
				
					if(!isset($_SESSION["user"])) {
					?>
						<a class="dropdown-item" href="reglog.php">Register / Login</a>
					<?php } else { ?>
						<a class="dropdown-item" href="logout.php">Logout</a>
					<?php } ?>
						<a class="dropdown-item" href="Portofolio.php">Portofolio</A>
						<a class="dropdown-item" href="about.php">About Us</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="container" style="margin-top:25px">
		<div class="row">
			<div class="col-sm-4">
				<h3>Bingung mau isi apa</h3>
				<p>Soalnya udah lama ga bikin web lagi</p>
				<h3>Bingung mau isi apa</h3>
				<p>Soalnya udah lama ga bikin web lagi</p>
				<h3>Bingung mau isi apa</h3>
				<p>Soalnya udah lama ga bikin web lagi</p>
				<h3>Bingung mau isi apa</h3>
				<p>Soalnya udah lama ga bikin web lagi</p>
				<ul class="nav nav-pills flex-column">
					<h3>Mari Belajar BADWORD</h3>
					<p>Dengan mengklik link ini, kalian bisa belajar badword dalam beberapa bahasa di dunia</p>
					<li class="nav-item"><A class="nav-link" href="#">B. Rusia</a></li>
					<li class="nav-item"><A class="nav-link" href="#">B. Zimbabwe</a></li>
					<li class="nav-item"><a class="nav-link" href="#">B. Spanyol</a></li>
					<li class="nav-item"><A class="nav-link disabled" href="#">B. Filipina</a></li>
				</ul>
			</div>
			<div class="col-sm-8">
				<h3>Doain aja yak</h3>
				<p>Supaya cita-cita gua tercapai semua</p>
				<h3>Jadi gua bisa ada yang dibanggain</h3>
				<p>Hehehe <3</p>
				<h3>Doain aja yak</h3>
				<p>Supaya cita-cita gua tercapai semua</p>
				<h3>Jadi gua bisa ada yang dibanggain</h3>
				<p>Hehehe <3</p>
				<h3>Doain aja yak</h3>
				<p>Supaya cita-cita gua tercapai semua</p>
				<h3>Jadi gua bisa ada yang dibanggain</h3>
				<p>Hehehe <3</p>
				<h3>Doain aja yak</h3>
				<p>Supaya cita-cita gua tercapai semua</p>
				<h3>Jadi gua bisa ada yang dibanggain</h3>
				<p>Hehehe <3</p>
				<h3>Doain aja yak</h3>
				<p>Supaya cita-cita gua tercapai semua</p>
				<h3>Jadi gua bisa ada yang dibanggain</h3>
				<p>Hehehe <3</p>
				<h3>Doain aja yak</h3>
				<p>Supaya cita-cita gua tercapai semua</p>
				<h3>Jadi gua bisa ada yang dibanggain</h3>
				<p>Hehehe <3</p>
			</div>
		</div>
	</div>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h4>Ini adalah bagian footer</h4>
	</div>
</body>