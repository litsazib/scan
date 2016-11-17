<?php
$server='localhost';
$username='root';
$password='';
$database='login';

try{
	$conn= new PDO("mysql:host=$server;dbname=$database;",$username,$password);
	$dbcreate="CREATE DATABASE sazib";
	$tableCreate="	
	CREATE TABLE `users` (
	  `id` INT(11) NOT NULL,
	  `username` VARCHAR(50) DEFAULT NULL,
	  `email` VARCHAR(50) DEFAULT NULL,
	  `password` VARCHAR(300) DEFAULT NULL
	)";

	$stmt=$conn->prepare($dbcreate);
		if($stmt->execute()):		
		$tbl=$conn->prepare($tableCreate);
		$tbl->execute();
		 echo $massage='Database Create Sucessfull';
	else:
		 echo $massage='Database Create faild!';
	endif;
}
catch(PDOException $ex){
	die("Connection Failed: ".$ex->getMessage());
}
?>
