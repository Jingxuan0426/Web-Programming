<?php

   // MySQL connection parameters
   $servername = "localhost"; // Change if your MySQL server is hosted elsewhere
   $username = "root"; // Change to your MySQL username
   $password = ""; // Change to your MySQL password
   $database = "phpmyadmin"; // Change to your MySQL database name

   // Create connection
   $conn = new mysqli($servername, $username, $password, $database);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

$name = $_POST['username'];
// $password = $_POST['password'];
$email = $_POST['email'];
// $role = $_POST['role'];

$sql = "INSERT INTO `user`(`user_name`, `user_password`, `user_email`, `user_role`)
 VALUES ('$name','123','$email','123')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:User Manage.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

 ?>
