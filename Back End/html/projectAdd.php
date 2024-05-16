<?php
include_once "/xampp/htdocs/Web-Programming/common/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Add</title>
    <link rel="stylesheet" href="/Back End/css/projectAdd.css">
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
    
<div class="main3">
  <div class="row">
    <h2 style="font-size: 3rem; margin-top: 5rem; margin-bottom: 1.5rem; margin-left:4px;">Projects </h2>
</div>


<div class="insert">
 <button class="image-button">
        <img src="path_to_your_image.jpg" alt="">
        <span>Project Cover Picture</span>
    </button>  
 </div>
</div>

<div class="main3">
<form>
 <div class="mb-3 col-sm-12" style="margin-top: 40px;margin-bottom:50px;">
    <label for="project" class="form-label" >Project Title</label>
    <input type="text" class="form-control" id="projectTitle" style="background-color: transparent; border: 2px solid white;
    border-radius:0px; ">
 </div>

 <div class="mb-3 col-sm-12" style="margin-top: 40px;margin-bottom:50px;">
    <label for="project" class="form-label" >Creator</label>
    <input type="text" class="form-control" id="creator" style="background-color: transparent; border: 2px solid white;
    border-radius:0px; ">
 </div>


 <div class="mb-3 col-sm-12" style="margin-top: 40px;margin-bottom:50px;">
    <label for="project" class="form-label" >Project Title</label>
    <input type="text" class="form-control" id="projectTitle" style="background-color: transparent; border: 2px solid white;
    border-radius:0px; ">
 </div>

 <div class="year">
    <div class="mb-3 col-sm-5" style="margin-right:190px;">
    <label for="project" class="form-label" >Year</label>
      <input type="text" class="form-control" style="background-color: transparent; border: 2px solid white;
    border-radius:0px; margin-right: 50px;" placeholder="First name">
    </div>
    <div class="mb-3 col-sm-5">
    <label for="project" class="form-label" >Category</label>
      <input type="text" class="form-control" style="background-color: transparent; border: 2px solid white;
    border-radius:0px;" placeholder="Last name">
    </div>
  </div>

  <div class="mb-3 col-sm-12" style="margin-top: 40px;margin-bottom:50px;">
    <label for="project" class="form-label" >Tags</label>
    <input type="text" class="form-control" id="projectTitle" style="background-color: transparent; border: 2px solid white;
    border-radius:0px; ">
 </div>

 <div class="mb-3 col-sm-12" style="margin-top: 40px;margin-bottom:50px;">
    <label for="project" class="form-label" >Pictures/Videos</label>
    <div class="upload" >
        <button class="upload-button">
        <img src="path_to_your_image.jpg" alt="">
        <span>+Add</span>
    </button>  
 </div>
 </div>

</div>

</form>

</div>

</body>