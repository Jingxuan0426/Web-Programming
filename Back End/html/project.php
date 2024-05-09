<?php
include_once "/xampp/htdocs/Web-Programming/common/connection.php";
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


 <div class="main3">
  <div class="row">
    <h2 style="font-size: 3rem; margin-top: 5rem; margin-bottom: 1.5rem;">Projects 
    <a href="/Back End/html/projectAdd.html"><button type="submit" class="btn-add px-md-4">Add User+</button></a> 
  </h2>
        
        <a href="/Back End/html/Ban User.html"><button type="submit" >Banned User</button></a>
  </div>
  </div>

  <div class="main3">    
    <div class="row-mb-3" style="margin-top: 274px;">
      <a style="font-size: 3rem; margin-top: 5rem; margin-bottom: 1.5rem;font-weight:bold;" class="btn-ban px-md-4">Full Time</a> 
      <button style="font-size:30px;">Part Time</button> 
      <button class="btn-view" style="font-size:30px;">Freelance</button>    
    </div>
  </div>

</body>