<?php
include_once "/xampp/htdocs/Web-Programming/common/connection.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Photography</title>
  <link rel="stylesheet" href="/Front End/css/Category.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
</head>

<body class="overflow-x-hidden">

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <a href="/Back End/html/login.php"><img src="/Front End/images/new logo black.png" width="100px" height="100px" alt="Logo"></a>
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/Front End/html/Overview.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Front End/html/Aboutus.php">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Category</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/Front End/html/Videography.php">Videography</a></li>
              <li><a class="dropdown-item" href="/Front End/html/Sculpture.php">Sculpture</a></li>
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
            <a class="nav-link" href="/Front End/html/Job.php">Jobs</a>
          </li>
          <a href="/Front End/html/Upload.php" target="_blank"><button type="button" class="btn-nav">Upload</button></a>
          <a href="/Back End/html/logout.php" target="_blank"><button type="button" class="btn-nav" style="margin-left: 10px;">Logout</button></a>
        </ul>
      </div>
    </div>
  </nav>

  <!-- navbar end -->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/Front End/images/Photography/e39.jpg" class="d-block w-100 col-12" alt="...">
        <div class="carousel-caption justify-content-center d-flex">
          <h1 class="d-block" style="font-size: 5rem; margin-bottom: 285px;">Photography</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/Front End/images/Photography/e40.jpg" class="d-block w-100 col-12" alt="...">
        <div class="carousel-caption justify-content-center d-flex">
          <h1 class="d-block" style="font-size: 5rem; margin-bottom: 285px;">Photography</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/Front End/images/Photography/e41.jpg" class="d-block w-100 col-12" alt="...">
        <div class="carousel-caption justify-content-center d-flex">
          <h1 class="d-block" style="font-size: 5rem; margin-bottom: 285px;">Photography</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/Front End/images/Photography/e42.jpg" class="d-block w-100 col-12" alt="...">
        <div class="carousel-caption justify-content-center d-flex">
          <h1 class="d-block" style="font-size: 5rem; margin-bottom: 285px;">Photography</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/Front End/images/Photography/e43.jpg" class="d-block w-100 col-12" alt="...">
        <div class="carousel-caption justify-content-center d-flex">
          <h1 class="d-block" style="font-size: 5rem; margin-bottom: 285px;">Photography</h1>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section id="category">

    <div class="container">
      <div class="row">

      <?php
      // Assuming you have an array where each element contains an image path and a button name
      $image_data = array(
          array("path" => "/Front End/images/Photography/e44.jpg", "button_name" => "Explore"),
          array("path" => "/Front End/images/Photography/e31.jpg", "button_name" => "Astrophotography"),
          array("path" => "/Front End/images/Photography/e32.jpg", "button_name" => "Spices"),
          array("path" => "/Front End/images/Photography/e33.jpg", "button_name" => "The Street Photography Guide"),
          array("path" => "/Front End/images/Photography/e34.jpg", "button_name" => "Cityscapes"),
          array("path" => "/Front End/images/Photography/e35.jpg", "button_name" => "Breakfast Pastries"),
          array("path" => "/Front End/images/Photography/e36.jpg", "button_name" => "Street Photography in India"),
          array("path" => "/Front End/images/Photography/e37.jpg", "button_name" => "The Nature Photography Contest"),
          array("path" => "/Front End/images/Photography/e38.jpg", "button_name" => "Creative Tricks"),
          // Add more elements as needed
      );

      // Get the total number of images
      $total_images = count($image_data);

      // Loop through the array to generate HTML for each image and button
      foreach ($image_data as $key => $data) {
          ?>
          <div class="col-md-4 py-3 py-md-0 col-12 <?php echo ($key == $total_images - 1) ? 'mb-5' : ''; ?>">
              <div class="card">
                  <img src="<?php echo $data['path']; ?>" class="card-img" alt="...">
                  <div class="card-img-overlay">
                      <h1 class="card-title"></h1>
                      <h2 class="card-body text-center">
                      <?php if ($key == 0) { ?>
                              <a href="project_photography.php" target="_blank">
                                  <button type="button" class="btn-view mx-auto"><?php echo $data['button_name']; ?></button>
                              </a>
                          <?php } else { ?>
                              <button type="button" class="btn-view mx-auto" disabled><?php echo $data['button_name']; ?></button>
                          <?php } ?>
                      </h2>
                  </div>
              </div>
          </div>
    <?php
}
?>


      </div>
    </div>
  </section>
  <!-- category end -->


  <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100092615201359" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/chill_cafe_97/" target="_blank"><i class="fab fa-instagram"></i></a>
                                                       
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

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>