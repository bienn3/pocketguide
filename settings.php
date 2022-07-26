<?php
	$database = 'mysql:host=localhost; dbname=pocketguide';
	$user = 'lemon';
	$pwd = 'rTC0!Njo-KsCvNVM';
try{
	$pdo = new PDO($database, $user, $pwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}	catch(PDOException $e){
	echo 'Connection failed: '.$e->getMessage();
}
?>