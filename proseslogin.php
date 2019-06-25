<?php
	require("koneksi.php");
	if(isset($_POST['login'])) 
	{
		$username = FILTER_INPUT(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$password = FILTER_INPUT(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		
		
		$sql = "select * from akun WHERE username=:username OR email=:email";
		$stmt = $dbh->prepare($sql);
		$params = array(
		":username" => $username,
		":email" => $username
		);
		
		$stmt->execute($params);
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		
		if($user){
			if(password_verify($password, $user["password"])) {
				session_start();
				$_SESSION["user"] = $user;
				
				headeR("Location : index.php");
			}
		}
	}
?>