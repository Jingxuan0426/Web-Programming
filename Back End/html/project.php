<?php
include_once "/xampp/htdocs/Web-Programming/common/connection.php";
$servername = "localhost"; // Change if your MySQL server is hosted elsewhere
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "phpmyadmin"; // Change to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
if ($conn->connect_error) { 
    echo "Connect failed";
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the profile table
$sql = "SELECT user_id, user_name, user_email, user_contact, user_location FROM profile";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<div class='card' style='width: 75rem;'>";
    echo "<div class='card-body'>";
    echo "<h1 class='card-title'>User " . $row['user_id'] . "</h1>";
    echo "<p class='card-text'>Name: " . $row['user_name'] . "</p>";
    echo "<p>Email: " . $row['user_email'] . "</p>";
    echo "<p>Contact: " . $row['user_contact'] . "</p>";
    echo "</div>";
    echo "</div>";
    echo "<a href='/Back End/html/editUser.php?user_id=".$row['user_id']."'><button type='submit' class='btn-edit'>Edit User</button></a>";
    echo "<button type='submit' class='btn-user'>Ban User</button>";
}

$conn->close();

// Define an array of portfolio items
$portfolioItems = array(
  array(
      'image' => 'image1.jpg',
      'title' => 'Project 1',
      'description' => 'Description of Project 1',
      'link' => 'project1.php'
  ),
  array(
      'image' => 'image2.jpg',
      'title' => 'Project 2',
      'description' => 'Description of Project 2',
      'link' => 'project2.php'
  ),
  // Add more portfolio items as needed
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="/Back End/css/projectBackend.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">

</head>

<body class="overflow-x-hidden" style="background-color: black;">

    <div class="sidenav">
        <a class="navbar-brand" href="#">
            <img src="/Back End/images/new logo red.png" alt="" width="90" height="90">
        </a>
        <a href="/Back End/html/User Manage.html" style="margin-top: 60px;">User Management</a>
        <a href="#">Projects</a>
        <a href="/Back End/html/Back.html">Log Out</a>
    </div>
    <!-- navbar end -->

<?php
    $servername = "localhost"; // Change if your MySQL server is hosted elsewhere
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "phpmyadmin"; // Change to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) { 
    echo "Connect failed";
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the profile table
$sql = "SELECT * FROM imageall";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<div class='row' style='align-items: center; margin-bottom: 90px;'>";
    echo "<img src=,/Front End/images/Jobs/machi.png' style='max-width: 500px;' class='col-md-5'>";
    echo "<span class='col-md-7'>";
    echo "<h1 class='prtitle'>Title: " . $row['user_id'] . "</h1>";
    echo "<p class='card-text'>Name: " . $row['user_name'] . "</p>";
    echo "<p>Email: " . $row['user_email'] . "</p>";
    echo "<p>Contact: " . $row['user_contact'] . "</p>";
    echo "</div>";
    echo "</div>";
    echo "<a href='/Back End/html/editUser.php?user_id=".$row['user_id']."'><button type='submit' class='btn-edit'>Edit User</button></a>";
    echo "<button type='submit' class='btn-user'>Ban User</button>";
}

<h1 class="prtitle">Subway Scuffle </h1>
  <h2 class="byyear">By: Machi</h2>
  <h3 class="byyear" style="margin-bottom: 40px;">Year: 2024</h>
  <h4>
  <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add"> Edit </button></a> 
  <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add"> Delete </button></a> 

$conn->close();

// Define an array of portfolio items
$portfolioItems = array(
  array(
      'image' => 'image1.jpg',
      'title' => 'Project 1',
      'description' => 'Description of Project 1',
      'link' => 'project1.php'
  ),
  array(
      'image' => 'image2.jpg',
      'title' => 'Project 2',
      'description' => 'Description of Project 2',
      'link' => 'project2.php'
  ),
  // Add more portfolio items as needed
);
?>

<!--end here-->


 <div class="main3">
  <div class="row">
    <h2 style="font-size: 3rem; margin-top: 5rem; margin-bottom: 1.5rem; margin-left:4px;">Projects 
    <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add px-md-4"> Add </button></a> 
  </h2>
</div>

 <div>
  <div class="row" style="align-items: center; margin-bottom: 90px;">
  <img src="/Front End/images/Jobs/machi.png" style="max-width: 500px;" class="col-md-5">
  <span class="col-md-7">
  <h1 class="prtitle">Subway Scuffle </h1>
  <h2 class="byyear">By: Machi</h2>
  <h3 class="byyear" style="margin-bottom: 40px;">Year: 2024</he>
  <h4>
  <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add"> Edit </button></a> 
  <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add"> Delete </button></a> 
</h4>
</span>
  </div>
 </div>

 <div>
  <div class="row" style="align-items: center; margin-bottom: 90px;">
  <img src="/Front End/images/Jobs/taylor.png" style="max-width: 500px;" class="col-md-5">
  <span class="col-md-7">
  <h1 class="prtitle">Train</h1>
  <h2 class="byyear">By: TaylorYingshi</h2>
  <h3 class="byyear" style="margin-bottom: 40px;">Year: 2020</he>
  <h4>
  <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add"> Edit </button></a> 
  <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add"> Delete </button></a> 
</h4>
</span>
  </div>
 </div>

 <div>
  <div class="row" style="align-items: center; margin-bottom: 90px;">
  <img src="/Front End/images/Jobs/syarawi.png" style="max-width: 500px;" class="col-md-5">
  <span class="col-md-7">
  <h1 class="prtitle">Coffee Machine </h1>
  <h2 class="byyear">By: Syarawi</h2>
  <h3 class="byyear" style="margin-bottom: 40px;">Year:   2023</he>
  <h4>
  <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add"> Edit </button></a> 
  <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add"> Delete </button></a> 
</h4>
</span>
  </div>
 </div>

 <div class="bottom-right">
  This is at the bottom right corner.
</div>

</body>