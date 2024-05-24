<?php

   // MySQL connection parameters
   $servername = "localhost"; // Change if your MySQL server is hosted elsewhere
   $username = "root"; // Change to your MySQL username
   $password = ""; // Change to your MySQL password
   $database = ""; // Change to your MySQL database name

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


$sql = "INSERT INTO user`(`username`, `user_email`, `user_contact`, `user_location`,`job_specialized_field`, `job_position`, `job_type`) 
VALUES (?,?,?,?,?,?,?)";

// $sql2 = "INSERT INTO `user`() 
// VALUES ('?,?,?' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:User Manage.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

 ?>
