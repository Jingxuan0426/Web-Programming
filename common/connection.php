<?php 
 	try { 
 		$connection = new PDO('mysql:host=localhost;dbname=assignment','root',''); 
        
	} 
	catch (PDOException $e) { 
 		echo $e->getMessage(); 
	} 
?>
