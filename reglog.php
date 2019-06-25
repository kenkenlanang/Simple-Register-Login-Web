<!DOCTYPE html>
<html>
<head>
	<title>Register & Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</heaD>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h2>Ini adalah page kalian untuk register dan login</h2>
		<p>Bentar dulu ya, bikin pagenya dulu, database biar loginan entaran abis ini kelar :3</p>
	</div>
	<div class="navbar navbar-dark navbar-expand-sm bg-dark sticky-top">
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
						<a class="dropdown-item" href="reglog.php">Register / Login</a>
						<a class="dropdown-item" href="portofolio.php">Portofolio</a>
						<a class="dropdown-item" href="about.php">About Us</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="container" style="margin-top:25px">
		<div class="row">
			<div class="col-sm-6">
				<form action="proseslogin.php" class="form-group" method="POST">
					<h3>Sudah jadi member kita? Kuy login</h3>
					<h4>Login</h4>
					<label for="username" class="mb-2">Username / Email</label> :
					<input type="text" name="username" class="form-control mb-2" placeholder="Masukkan username atau email" autocomplete="off"/>
					<label for="password" class="mb-2">Password</label> :
					<input type="password" name="password" class="form-control mb-4" placeholder="Masukkan password" autocomplete="off"/>
					<input type="submit" class="btn btn-outline-primary mr-2" name="login" value="Login"/>
					<a href="#">Lupa password?</a>
				</form>
			</div>
			<div class="col-sm-6">
				<form action="prosesregister.php" class="form-group" method="POST">
					<h3>Mau jadi member? Ya register dulu dong~</h3>
					<h4>Register</h4>
					<label for="fullname" class="mb-2">Nama Lengkap</label> :
					<input type="text" name="fullname" class="form-control mb-2" placeholder="Masukkan nama lengkap anda" autocomplete="off"/>
					<label for="email" class="mb-2">Email</label> :
					<input type="email" name="email" class="form-control mb-2" placeholder="Masukkan email anda" autocomplete="off"/>
					<label for="username" class="mb-2">Username</label> :
					<input type="text" name="username" class="form-control mb-2" placeholder="Masukkan username yang diinginkan" autocomplete="off"/>
					<label for="password" class="mb-2">Password</label> :
					<input type="password" name="password" class="form-control mb-4" placeholder="Masukkan password yang diinginkan" autocomplete="off"/>
					<input type="submit" class="btn btn-outline-info" name="register" value="Register"/>
					<button type="reset" class="btn btn-outline-warning">Reset</button>
				</form>
			</div>
		</div>
	</div>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h4>Ini adalah footer</h4>
	</div>
</body>
</html>