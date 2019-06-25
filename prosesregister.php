<?php
	require("koneksi.php");
	if(isset($_POST['register'])) 
	{
		$fullname	= FILTER_INPUT(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
		$username	= FILTER_INPUT(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$email		= FILTER_INPUT(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$password	= password_hash($_POST["password"], PASSWORD_DEFAULT);
		
		$sql = "insert into akun (fullname, username, email, password) values (:fullname, :username, :email, :password)";
		$stmt=$dbh->prepare($sql);
		
		$params = array(
		":fullname" => $fullname,
		":username" => $username,
		":email" => $email,
		":password" => $password
		);
		
		$saved = $stmt->execute($params);
		if($saved)
		header("Location: reglog.php");		
	}
	?>
	
	