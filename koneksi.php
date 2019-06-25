<?php
try {
	$db_host="localhost";
	$db_user="root";
	$db_pass="";
	$db_name="tutorial";
	
	$dbh = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e) {
	die ("ERROR GAN YAAMPUN! Masalah : ". $e->getMessage());
}
