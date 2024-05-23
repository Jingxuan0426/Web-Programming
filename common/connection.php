<?php 
 	try { 
 		$connection = new PDO('mysql:host=localhost;dbname=project','root',''); 
        
	} 
	catch (PDOException $e) { 
 		echo $e->getMessage(); 
	} 
?>
