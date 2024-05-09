<?php 
 	try { 
 		$connection = new PDO('mysql:host=localhost;dbname=phpmyadmin','root',''); 
        
	} 
	catch (PDOException $e) { 
 		echo $e->getMessage(); 
	} 
?>
