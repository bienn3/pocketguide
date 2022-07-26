<?php
	include ('settings.php');
	$stmt=$pdo->query('SELECT * FROM user_accounts');
	$rows=$stmt->fetchAll();
	$count=$stmt->rowCount();
	
	
	for ($i=0;$i<=$count-1;$i++){
		
	echo $rows [$i] ['fullname'].'<br>';
	
	}
?>
<a href="logout.php">Logout</a>