<?php
 //REMEMBER PUT THISSSSSS TO ALL PAGEEEEEEEEEEEE
 session_start();

 if(!$_SESSION['loggedin']) {
     header("location: /Back End/html/login_page.php");
 }
 
// Database connection
include "../../common/connection.php";
  
  // Define the SQL query
  $query = "SELECT image.*, project.*, user.username, category.category_name
            FROM image 
            INNER JOIN project ON image.project_id = project.project_id
            INNER JOIN user ON project.user_id = user.user_id
            INNER JOIN category ON category.category_id = project.category_id
            WHERE project.project_id = :project_id";
  
  // Prepare the statement
  $stmt = $pdo->prepare($query);
  
  // Bind parameters
  $project_id = $_GET['id'];
  $stmt->bindParam(":project_id", $project_id, PDO::PARAM_INT);
  
  // Execute the query
  $stmt->execute();
  
  // Fetch all the results
  $data = $stmt->fetchAll();
  
  // Debug purpose
//   foreach($data as $child_data){
//     var_dump($data);
//     die();
//   }

  
  // Now you can use $data to display project details and associated images on your category page
  
  
 ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Gerda by Aleksandra Alekseeva</title>
        <link href="/Front End/css/projectstyle.css" rel="stylesheet">
        <link href="/Front End/css/bootstrap.css" rel="stylesheet">
        <script src="/Front End/js/bootstrap.bundle.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap"
            rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap"
            rel="stylesheet">
    </head>

    <body style="background-color: black;">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                <img src="/Front End/images/new logo black.png" width="100px"
                    height="100px" alt="Logo">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/Front End/html/overview_page.php">Home</a>
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

        <div style="opacity: 1;" class="fade-page-in">

<div style="margin-bottom: 5rem; background-color: black;">
    <img
        src="<?php echo $data[0]['image_location'] ?>"
        class="img-fluid"
        style="max-width: 100%; opacity: 0.5;">
</div>

<!-- Loop -->
<!-- Replace Hardcode -->

<div class="container" style="color: whitesmoke;">
    <div class="flex-row project-meta-container">
        <div class="item-bordered project-meta-item">
            <h3 class="project-meta-header">Project Title</h3> <!-- $project title -->
            <div class="project-meta-content"
                style="padding-bottom: 3rem;"><?php echo $data[0]['project_title'] ?></div>
            <h3 class="project-meta-header">CREATOR</h3>
            <div class="project-meta-content"><?php echo $data[0]['username'] ?></div>
        </div>
        <div class="item-bordered project-meta-item">
            <h3 class="project-meta-header">YEAR</h3>
            <div class="project-meta-content"><?php echo $data[0]['year_created'] ?></div>
        </div>
        <div class="item-bordered project-meta-item">
            <h3 class="project-meta-header">TAGS</h3>
            <div class="project-meta-content"><?php echo $data[0]['category_name'] ?></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="project-intro">
        <div class="ss-list">
            <div class="ss-items" role="list">
                <?php foreach ($data as $key => $child_data) { ?>
                    <div class="ss-item" role="listitem">
                        <div class="project-image-block">
                            <div class="project-image-large">
                                <img
                                    src="<?php echo $child_data["image_location"] ?>"
                                    id="project-image-border">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>

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

    </body>

</html>
