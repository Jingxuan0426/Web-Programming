<?php
   //REMEMBER PUT THISSSSSS TO ALL PAGEEEEEEEEEEEE
    session_start();

    if(!$_SESSION['loggedin']) {
        header("location: /Back End/html/login_page.php");
    }
?>
 
 <!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>
  <link rel="stylesheet" href="/Front End/css/uploadpage.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
 
</head>

<body class="overflow-x-hidden;" style="background-color: black;">

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
          </li>x
          <a href="/Front End/html/Upload.php" target="_blank"><button type="button" class="btn-nav">Upload</button></a>
                <a href="/Back End/html/logout.php" target="_blank"><button type="button" class="btn-nav" style="margin-left: 10px;">Logout</button></a>
        </ul>
      </div>
    </div>
  </nav>


  <!-- navbar end -->

  <div id="carouselExampleCaptions" class="carousel slide"
  data-bs-ride="carousel">
  <div class="carousel-indicators"></div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/Front End/images/Upload/firebird.jpg"
        class="d-block w-100 col-12" alt="...">
      <div class="carousel-caption justify-content-center d-flex">
        <h1 class="d-block"
          style="font-size: 5rem; margin-bottom: 285px;font-weight: bold;text-align: center;">UPLOAD</h1>
      </div>
    </div>
  </div>
</div>

<!-- carousel end -->

<!--<div class="container">
  <div class="center">
    <img src="/Front End/images/Upload/firebird.jpg" id="project-image-border">
    <div class="middle">UPLOAD</div>
  </div>
</div>                
 -->                
<div class="container">
<p class="project-meta-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
</div>           

 <div class="main" style="text-align: center ;">
        <h2 style="font-size: 3rem; margin-top: 5rem;">DETAILS</h2>
    </div>
 
 <div class="main2"  >
      <form action="Upload_Backend.php" method="POST" enctype="multipart/form-data">
          <div class="row mb-3" style="margin-top: 78px;">
              <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10" style="padding: auto;">
                <input type="text" class="form-control" id="inputName3" name="name">
              </div>
          </div>
          <div class="row mb-3" style="margin-top: 42px;">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10" style="padding: auto;">
                  <input type="email" class="form-control" id="inputEmail3" name="email">
              </div>
          </div>
          <div class="row mb-3" style="margin-top: 42px;">
              <label for="inputContact3" class="col-sm-2 col-form-label">Contact</label>
              <div class="col-sm-10" style="padding: auto;">
                  <input type="text" class="form-control" id="inputContact3" name="contact">
              </div>
          </div>
          <div class="row mb-3" style="margin-top: 42px;">
              <label for="inputLocation3" class="col-sm-2 col-form-label">Location</label>
              <div class="col-sm-10" style="padding: auto;">
                  <input type="text" class="form-control" id="inputLocation3" name="location">
              </div>
          </div>

          <div class="mb-3 col-sm-12" style="margin-top: 42px;">
              <label for="inputField" class="form-label">Specialized Field</label>
              <input type="text" class="form-control" id="inputField" name="field">
          </div>
          <div class="mb-3 col-sm-12" style="margin-top: 42px;">
              <label for="inputOccupation" class="form-label">Occupation/Desired Job Position</label>
              <input type="text" class="form-control" id="inputOccupation" name="job_position">
          </div>
          <div class="mb-3 col-sm-12" style="margin-top: 42px;">
              <label for="inputJob" class="form-label">Part-Time/Full-Time/Freelance</label>
              <input type="text" class="form-control" id="inputJob" name="job_type">
          </div>
          <div class="row mb-3" style="margin-top: 42px;">
            <label for="files" class="col-sm-2 col-form-label">Portfolio</label>
            <input type="file" id="files" name="files[]" multiple><br><br>
            <!-- <div class="col-sm-5" style="padding: auto;">
                <input type="password" class="form-control" id="inputEmail3">
            </div>
            <div class="col-sm-3">
                <button type="browse" class="browse">Browse</button>
            </div> -->
          </div>
        <!-- <div>
          <p style="text-align: center;padding-top:34px;font-size: 32px;">OR</p>
        </div> -->
      <!-- <div class="mb-3 col-sm-5" style="padding-top: 34px;margin: auto;">
          <input type="text" class="form-control" id="inputJob" placeholder ="Insert file here...">
      </div> -->
      <div class="col-sm-12">
        <button type="submit" class="btn-view">UPLOAD</button>
      </div>
    </form>
  </div>

  
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100092615201359"
              target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/chill_cafe_97/"
              target="_blank"><i class="fab fa-instagram"></i></a>

            <h5>@ spectrumstudio</h5>
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

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>