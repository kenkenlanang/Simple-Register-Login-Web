<!DOCTYPE html>
<?php

?>
<html>
<head>
	<title>Front Page</title>
	<meta charset="utf-8" name="viewport" content="width=device-widht, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
			<h2>Front Page Tutorial</h2>
			<p>Belajar membuat hanya dengan melihat contoh xd xd (sedikit nyonte')</p>
	</div>
	<div class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
		<a class="navbar-brand" href="index.php">Tutorial</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavbarCollapser">
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
				<h3>Tentang Saya</h3>
				<p>Sekilas tentang saya</p>
				<img src="profpic.jpg" style="height:200px" alt="Ceritanya gambar">
				<p>Saya adalah Mahasiswa biasa dengan bekgron yang cukup biasa
				Suka mie instan, dota, sama tidur</p>
			<ul class="nav nav-pills flex-column">
				<h3>Mari Belajar BADWORD</h3>
				<p>Dengan mengklik link ini, kalian bisa belajar badword dalam beberapa bahasa di dunia</p>
				<li class="nav-item"><a class="nav-link" href="#">B. Rusia</a></li>
				<li class="nav-item"><a class="nav-link" href="#">B. Zimbabwe</a></li>
				<li class="nav-item"><a class="nav-link" href="#">B. Spanyol</a></li>
				<li class="nav-item"><a class="nav-link disabled" href="#">B. Filipina</a></li>
			</ul>
				
			</div>
			<div class="col-sm-8">
				<h3>Ahmad Putra Ardana</h3>
				<p>Manusia standar</p>
				<img src="ncanncan.png" style="height:200px" alt="Ceritanya gambar">
				<p>Lorem ipsum dolor silir amet tangina bobo cyka bylat tangina gayo kopigayo kaepci ayamnya enak marugame terbaik
				Lorem ipsum dolor silir amet tangina bobo cyka bylat tangina gayo kopigayo kaepci ayamnya enak marugame terbaik<br>
				Lorem ipsum dolor silir amet tangina bobo cyka bylat tangina gayo kopigayo kaepci ayamnya enak marugame terbaik</p>
				<br>
				<h3>Iswandi dan Mujib</h3>
				<p>Pasangan Gay dari Bogor</p>
				<img src="swandjib.jpg" style="height:200px" alt="Ceritanya gambar">
				<p>Lorem ipsum dolor silir amet tangina bobo cyka bylat tagnain gayo kopigayo kaepci ayamnya enak marugame terbaik
				Lorem ipsum dolor silir amet tangina bobo cyka bylat tagnain gayo kopigayo kaepci ayamnya enak marugame terbaik<br>
				Lorem ipsum dolor silir amet tangina bobo cyka bylat tagnain gayo kopigayo kaepci ayamnya enak marugame terbaik</p>
				<br>
			</div>
		</div>
	</div>
	<div class="jumbotron text-center" style="margin-bottom:0">
			<h4>Ini adalah bagian footer (ceritanya)</h4>
	</div>
</body>