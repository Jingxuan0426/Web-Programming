<?php
  
  //REMEMBER PUT THISSSSSS TO ALL PAGEEEEEEEEEEEE
    session_start();

    if(!$_SESSION['loggedin']) {
        header("location: /Back End/html/login_page.php");
    }
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Overview</title>
  <link rel="stylesheet" href="/Front End/css/overview.css">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap"
    rel="stylesheet">
</head>

<body class="overflow-x-hidden" style="background-color: black;">

  <!-- navbar start -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container-fluid">
        <img src="/Front End/images/new logo black.png" width="100px"
          height="100px" alt="Logo">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavbar">
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

    <!-- navbar end -->
   
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/Front End/images/mountains.png" class="d-block w-100" alt="...">
        <div class="carousel-caption justify-content-center d-flex">
          <h1 class="d-block" style="font-size: 5rem; margin-bottom: 285px;">OVERVIEW</h1>
        </div>
      </div>
    </div>
  
  

    <div class="container">
      <div class="row" style="margin-top: 5rem;margin-bottom: 5rem;">
      
      <div class="col-md-12 ">
        <div class="card" 
        style="border: 3px solid #a10d3c; background-color: black;">
          <a href="/Front End/html/category_digitalillustration.php">
          <img src="/Front End/images/3D Illustration/aa.jpg" class="card-img" alt="..." 
          style="opacity: 0.5;">
          <div class="card-img-overlay">
            <h1 class="card-title">Digital Illustration</h1>
          </div>
          </a>
        </div>
      </div>
      
      <div class="col-md-6 py-0 py-md-4 col-12">
        <div class="card" 
        style="border: 3px solid #a10d3c; background-color: black;">
          <a href="/Front End/html/category_animation.php">
          <img src="/Front End/images/2D Animation/c5.jpg" class="card-img" alt="..." 
          style="opacity: 0.5;">
          <div class="card-img-overlay">
            <h1 class="card-title3">Animation</h1>
          </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 py-0 py-md-4 col-12">
        <div class="card" style="border: 3px solid #a10d3c; background-color: black;">
          <a href="/Front End/html/graphic_design.php">
          <img src="/Front End/images/Graphic Design/e12.jpg" class="card-img"  alt="..." 
          style="opacity: 0.5;">
          <div class="card-img-overlay">
            <h1 class="card-title3">Graphic Design</h1>
          </div>
          </a>
        </div>
      </div>

      
      <div class="col-md-4 py-3 py-md-0 col-12">
        <div class="card" style="border: 3px solid #a10d3c; background-color: black;">
          <a href="/Front End/html/photography.php">
          <img src="/Front End/images/Photography/Spices/e32.jpg" class="card-img" alt="..." 
          style="opacity: 0.5;">
          <div class="card-img-overlay">
            <h1 class="card-title2">Photography</h1>
          </div>
          </a>
        </div>
      </div>

      <div class="col-md-4 py-3 py-md-0 col-12">
        <div class="card" style="border: 3px solid #a10d3c; background-color: black;">
          <a href="/Front End/html/videography.php">
          <img src="/Front End/images/Videography/w&d/e50.jpg" class="card-img" alt="..." 
          style="opacity: 0.5;">
          <div class="card-img-overlay">
            <h1 class="card-title2">Videography</h1>
          </div>
          </a>
      </div>
      </div>

      <div class="col-md-4 py-3 py-md-0 col-12">
        <div class="card" style="border: 3px solid #a10d3c; background-color: black;">
          <a href="/Front End/html/sculpture.php">
          <img src="/Front End/images/Sculpture/Abstrac/e16.jpg" class="card-img" alt="..." 
          style="opacity: 0.5;">
          <div class="card-img-overlay">
            <h1 class="card-title2">Sculpture</h1>
          </div>
          </a>
      </div>
      </div>
    </div>
    </div>
  <!-- category end -->

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
  <!-- footer end -->

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>