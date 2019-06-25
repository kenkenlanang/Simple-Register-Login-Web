<!DOCTYPE html>
<?php
session_start();
require_once("auth.php");
?>
<html>
<head>
	<title>Our Portfolio</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h2>Ini adalah page portofolio</h2>
		<p>Hanya contoh/prototype. Cuman buat latihan untuk step selanjutnya :9 wismilak</p>
	</div>
	<div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<a class="navbar-brand" href="index.php">Tutorial</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#NavbarCollapser">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="NavbarCollapser">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="menu1.php">Menu 1</a></li>
				<li class="nav-item"><a class="nav-link" href="menu2.php">Menu 2</a></li>
				<li class="nav-item dropdown"><A class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Menu 3</a>
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
				<h2>Photo Editing</H2>
				<h4>Drawing Effect</h4>
				<img src="DrawEffect1.png" class="rounded" alt="Harusnya ada gambar" style="width:300px; height:300px">
				<p>Drawing Effect 1 featuring my uncled</p>
				<h4>Drawing Effect 2</h4>
				<img src="DrawEffect2.png" class="rounded" alt="Harusnya ada gambar" style="width:300px; height:300px">
				<p>Drawing my old friend in vocational high school</p>
				<h4>Coming Soon</h4>
				<h4>Coming Soon</h4>
				<h4>Coming Soon</h4>
			</div>
			<div class="col-sm-4">
				<h2>MEME!</h2>
				<h4>College student can relate</h4>
				<img src="Meme1.png" class="rounded" alt="Harusnya ada gambar" style="width:300px; height:300px">
				<p>Jika kamu anak kampus, pasti ngerti maksudnya</p>
				<h4>Original content creators can relate</h4>
				<img src="Meme2.png" class="rounded" alt="Harusnya ada gambar" style="width:300px; height:300px">
				<p>Dikala original kalah sama plagiat</p>
				<h4>Coming Soon</h4>
				<h4>Coming Soon</h4>
				<h4>Coming Soon</h4>
			</div>
			<div class="col-sm-4">
				<h2>Video Editing</h2>
				<h4>Coming Soon</h4>
				<h4>Coming Soon</h4>
				<h4>Coming Soon</h4>
				<h4>Coming Soon</h4>
				<h4>Coming Soon</h4>
			</div>
		</div>
	</div>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h4>Ini adalah bagian footer</h4>
	</div>
</body>
</html>