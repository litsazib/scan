<?php
$server='localhost';
$username='root';
$password='';
$database='scan';
try{
	$conn= new PDO("mysql:host=$server;dbname=$database;",$username,$password);
}
catch(PDOException $ex){
	die("Connection Failed: ".$ex->getMessage());
}
?>
