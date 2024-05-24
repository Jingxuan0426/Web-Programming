<?php

//REMEMBER PUT THISSSSSS TO ALL PAGEEEEEEEEEEEE
session_start();

if (!$_SESSION['loggedin']) {
  header("location: /Back End/html/login_page.php");
}

// Database connection
include "../../common/connection.php";

// Define the SQL query
$query = "SELECT * FROM user WHERE role='user'";

$sth = $pdo->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sth->execute();

// Fetch all the results
$user_data = $sth->fetchAll();
$user_total = count($user_data);
// var_dump($image_data);
// die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jobs</title>
  <link rel="stylesheet" href="/Front End/css/job copy.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
  <link
  href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap"
  rel="stylesheet">
</head>
<body style="background-color: black;" class="overflow-x-hidden">

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <img src="/Front End/images/new logo black.png" width="100px" height="100px" alt="Logo">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
          <a class="nav-link" href="/Front End/html/overview_page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Front End/html/Aboutus_page.php">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Category</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/Front End/html/videography.php">Videography</a></li>
              <li><a class="dropdown-item" href="/Front End/html/sculpture.php">Sculpture</a></li>
              <li><a class="dropdown-item" href="/Front End/html/graphic_design.php">Graphic Design</a></li>
              <li><a class="dropdown-item" href="/Front End/html/category_digitalillustration.php">Digital Illustration</a></li>
                <ul>
                  <li><a class="dropdown-item" href="/Front End/html/category_2dillustration.php">2D Illustration</a></li>
                  <li><a class="dropdown-item" href="/Front End/html/category_3dillustration.php">3D Illustration</a></li>
                </ul>
              <li><a class="dropdown-item" href="/Front End/html/category_animation.php">Animation</a></li>
                <ul>
                  <li><a class="dropdown-item" href="/Front End/html/category_2danimation.php">2D Animation</a></li>
                  <li><a class="dropdown-item" href="/Front End/html/category_3danimation.php">3D Animation</a></li>
                </ul>
              <li><a class="dropdown-item" href="/Front End/html/Photography.php">Photography</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Front End/html/Job_copy.php">Jobs</a>
          </li>
          <a href="/Front End/html/Upload.php" target="_blank"><button type="button" class="btn-nav">Upload</button></a>
                <a href="/Back End/html/logout.php" target="_blank"><button type="button" class="btn-nav" style="margin-left: 10px;">Logout</button></a>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main">    
    <div class="btn-head" style="margin-top: 150px;">
      <button class="btn-view" style="font-size:30px;">Full Time</button> 
      <button class="btn-view" style="font-size:30px;">Part Time</button> 
      <button class="btn-view" style="font-size:30px;">Freelance</button>    
    </div>
  </div>

  <!-- Before open section -->
  <?php for($i = 0; $i < $user_total; $i+=2) { ?>
  <div class="container">
    <div class="row">
      <?php for($j = 0; $j < $user_total && $j < 2; $j++) { ?>
      <div class="button-container">
        <button class="bordered-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions<?php echo $user_data[$j]['user_id']?>" aria-controls="offcanvasWithBothOptions">
          <img src="/Front End/images/Jobs/kungking.png" alt="Button 1" style="max-width: 680px;">
          <div class="overlay"></div>
          <span class="button-text">
            <h1 class="outlined-text" style="font-size:40px;color:#ff1a4d;font-weight: bold;"><?php echo $user_data[$j]['name'] ?></h1> <!-- Author Name -->
            <h2 class="outlined-text" style="font-size: 20px;"><?php echo $user_data[$j]['job_specialized_field'] ?></h2> <!-- Field -->
            <h3 class="outlined-text"><?php echo $user_data[$j]['job_position'] ?></h3> <!-- Job Position -->
            <!-- <h4 class="outlined-text" style="color: white; margin-top: 50px;">Updated 6 Days ago</h4> -->
          </span>
        </button>
        <!-- <button class="bordered-button">
          <img src="/Front End/images/Jobs/machi.png" alt="Button 2" style="max-width: 680px;">
          <div class="overlay"></div>
          <span class="button-text">
            <h1 class="outlined-text" style="font-size:40px;color:#ff1a4d;font-weight: bold;">MACHI</h1> 
            <h2 class="outlined-text" style="font-size: 20px;">2D Illustration </h2>
            <h3 class="outlined-text">Manga Artist</h3>
            <h4 class="outlined-text" style="color: white; margin-top: 50px;">Updated 2 Hours ago</h4>
          </span>
        </button> -->
      </div>
      <?php } ?>
    </div>
  </div>
  <?php } ?>
  
  <!-- <div class="container">
    <div class="row">
      <div class="button-container">
        <button class="bordered-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
          <img src="/Front End/images/Jobs/syarawi.png" alt="Button 1" style="max-width: 680px;">
          <div class="overlay"></div>
          <span class="button-text">
            <h1 class="outlined-text" style="font-size:40px;color:#ff1a4d;font-weight: bold;">SYARAWI</h1> 
            <h2 class="outlined-text" style="font-size: 20px;">3D Modelling, Branding</h2>
            <h3 class="outlined-text">3D Modeler</h3>
            <h4 class="outlined-text" style="color: white; margin-top: 50px;">Updated 10 Hours ago</h4>
          </span>
        </button>
        <button class="bordered-button">
          <img src="/Front End/images/Jobs/taylor.png" alt="Button 2" style="max-width: 680px;">
          <div class="overlay"></div>
          <span class="button-text">
            <h1 class="outlined-text" style="font-size:40px;color:#ff1a4d;font-weight: bold;">TaylorYingshi</h1> 
            <h2 class="outlined-text" style="font-size: 20px;">2D Illustration, 2D Animation </h2>
            <h3 class="outlined-text">2D Animator</h3>
            <h4 class="outlined-text" style="color: white; margin-top: 50px;">Updated 4 Years ago</h4>
          </span>
        </button>
      </div>
    </div>
  </div> -->

  <!-- After open section -->
  <?php foreach($user_data as $user) { ?>
  <div class="offcanvas offcanvas-end w-50" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions<?php echo $user['user_id']?>" aria-labelledby="offcanvasWithBothOptionsLabel" style="background-color: #5d063f; overflow-y: scroll;">
    <img src="/Front End/images/3D Illustration/Gerda_project/3dill_cover.jpg" class="job-cover" style="max-width: 100%;">
    <div class="offcanvas-header">
      <button type="button" class="btn-close overlay" data-bs-dismiss="offcanvas" aria-label="Close" style="margin-left: 700px; margin-top: 20px;"></button>
      <h5  style="color: white; margin-left: 215px; margin-right: auto; font-size: 35px;"><?php echo $user['name'] ?></h5>
    </div>
    <div class="jobcon" style="margin-top: -22px; margin-left: 280px; margin-right: auto; color: white;"><?php echo $user['user_location'] ?></div>

    <div class="container col-12" style="color: whitesmoke; margin-bottom: 20px;">
      <div class="row col-8 project-meta-container">
        <div class="project-meta-item">
          <h5 class="project-meta-header">EMAIL</h5>
          <div class="project-meta-content jobcon" style="padding-left: 10px;"><?php echo $user['email'] ?></div>
        </div>
      </div>
      <div class="row col-4 project-meta-container">
        <div class="project-meta-item">
          <h5 class="project-meta-header">CONTACT</h5>
          <div class="project-meta-content jobcon" style="padding-left: 10px;"><?php echo $user['user_contact'] ?></div>
        </div>
      </div>
    </div>

    <h5 class="project-meta-header" style="color: white; padding-left: 30px;">PORTFOLIO</h5>
    <div class="col-12 row" style="padding-left: 30px;padding-bottom: 15px;">
      <div class="col-4">
        <div class="card">
          <img src="/Front End/images/3D Illustration/Gerda_project/3dill1.jpg" class="card-img" alt="...">
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="/Front End/images/3D Illustration/Gerda_project/3dill3.jpg" class="card-img" alt="...">
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="/Front End/images/3D Illustration/Gerda_project/3dill4.jpg" class="card-img" alt="...">
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100092615201359" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/chill_cafe_97/" target="_blank"><i class="fab fa-instagram"></i></a>
            
            <h5 style="margin-top: 2rem;">@ spectrumstudio</h5>
            <h5>169 Jalan ABC
            53300 Kuala Lumpur.</h5>
            <h5>Email : spectrumstudio2024@gmail.com </h5>
            <h5>Tel : 011-52645876</h5>
          </div>
        </div>
      </div>  
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
