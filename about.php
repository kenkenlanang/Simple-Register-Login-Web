<!DOCTYPE html>
<?php
session_start();
require_once("auth.php");
?>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h2>Ini adalah bagian About Us / Tentang Kami</h2>
		<p>Setelah ini kita akan buat database dan login register, untuk crud, mungkin di web selanjutnya XD</p>
	</div>
	<div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<a class="navbar-brand" href="index.php">Tutorial</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavbarCollapser">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="NavbarCollapser">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="Menu1.php">Menu 1</a></li>
				<li class="nav-item"><A class="nav-link" href="Menu2.php">Menu 2</a></li>
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Menu 3</A>
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
		<h3 class="text-center">Apa ini?</h3>
		<div class="row">
			<div class="col-sm-6">
				<h4>Question and Answer</h4>
				<p><b>Q : Website apa sih ini?</b></p>
				<p>A : Website ini adalah website percobaan yang dibuat Kenken aja</p>
				<p><b>Q : Isinya apa aja?</b></p>
				<p>A : Isinya hanyalah konten random dan register-login</p>
				<p><b>Q : Pakai bahasa pemrograman apa aja?</b></p>
				<p>A : Hanya menggunakan PHP, MySQL untuk database dan framework CSS yaitu Bootstrap 4</p>
			</div>
			<div class="col-sm-6">
				<form class="form-group" action="" method="post">
				<h4>Kritik dan Saran</h4>
					<label for="namalengkap" class="mb-2">Nama Lengkap</label> :
					<input type="text" name="namalengkap" class="form-control mb-2" placeholder="Masukkan nama lengkap kamu"/>
					<label for="komentar" class="mb-2">Komentar</label> :
					<textarea class="form-control mb-4" name="komentar" placeholder="Masukkan kritik dan/atau saran disini"></textarea>
					<button type="submit" class="btn btn-info">Kirim</button>
				</form>
			</div>
		</div>
	</div>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h4>Ini adalah bagian footer</h4>
	</div>
</body>