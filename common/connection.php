<?php 
 	try { 
 		$pdo = new PDO('mysql:host=localhost;dbname=project_database','root','');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	catch (PDOException $e) { 
 		echo $e->getMessage(); 
	} 
?>
