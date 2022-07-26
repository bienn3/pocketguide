<?php
	$database = 'mysql:host=localhost; dbname=pocketguide';
	$user = 'pocketguide-admin';
	$pwd = '.rZGTryHSnqEu/Sh';
try{
	$pdo = new PDO($database, $user, $pwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}	catch(PDOException $e){
	echo 'Connection failed: '.$e->getMessage();
}
?>