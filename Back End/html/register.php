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
$contact = $_POST['contact'];
$location = $_POST['location'];
$field = $_POST['field'];
$occupation = $_POST['occupation'];
$job = $_POST['job'];


$sql = "INSERT INTO `profile`(`user_name`, `user_email`, `user_contact`, `user_location`) 
VALUES ('?,?,?,?')";

// $sql = "INSERT INTO `user`(`user_name`, `user_password`, `user_email`, `user_role`)
//  VALUES ('$name','123','$email','123')";

$sql2 = "INSERT INTO `job`(`job_specialized_field`, `job_position`, `job_type`) 
VALUES ('?,?,?')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:User Manage.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

 ?>
