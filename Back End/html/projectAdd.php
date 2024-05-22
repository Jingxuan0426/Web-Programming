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

    <style>
        body {
            background-color: black;
            color: white;
        }

        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #111;
            padding-top: 20px;
            z-index: 1;
        }

        .sidenav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidenav a:hover {
            background-color: #575757;
        }

        .main3 {
            margin-left: 260px; /* Same as the width of the sidenav */
            padding: 20px;
        }

        .form-control {
            background-color: transparent;
            border: 2px solid white;
            border-radius: 0px;
            color: white;
        }

        .form-label {
            font-family: 'Orbitron', sans-serif;
        }

        .upload-button, .image-button {
            background: none;
            border: 2px solid white;
            color: white;
            padding: 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        .upload-button:hover, .image-button:hover {
            background-color: #575757;
        }

        .upload img, .image-button img {
            display: block;
            margin: auto;
            max-width: 100%;
        }

        .preview {
            margin-top: 10px;
        }

        .preview img, .preview video {
            max-width: 100%;
            height: auto;
        }
        /* Adjust the width of the main container to accommodate additional input fields */
.main3 {
    margin-left: 260px;
    padding: 20px;
    width: calc(100% - 260px); /* Adjust based on the width of the sidebar */
}

/* Clearfix for the form elements to prevent layout disruption */
.form-group::after {
    content: "";
    display: table;
    clear: both;
}

/* Adjust the width of individual form elements */
.form-group {
    width: 100%; /* Make each form element occupy full width */
}

/* Style for the file input button */
.file-input {
    position: relative;
    overflow: hidden;
}

.file-input input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    font-size: 100px;
    cursor: pointer;
    opacity: 0;
}

/* Ensure consistent spacing between form elements */
.mb-3 {
    margin-bottom: 20px; /* Adjust based on your preference */
}
    </style>
</head>

<body class="overflow-x-hidden">

    <div class="sidenav">
        <a class="navbar-brand" href="#">
            <img src="/Back End/images/new logo red.png" alt="" width="90" height="90">
        </a>
        <a href="/Back End/html/User Manage.html" style="margin-top: 60px;">User Management</a>
        <a href="#">Projects</a>
        <a href="/Back End/html/Back.html">Log Out</a>
    </div>

    <div class="main3">
        <div class="row">
            <h2 style="font-size: 3rem; margin-top: 5rem; margin-bottom: 1.5rem; margin-left:4px;">Projects</h2>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="projectCoverPic" class="form-label">Project Cover Picture</label>
                <input type="file" class="form-control" id="projectCoverPic" name="projectCoverPic">
                <div id="coverPicPreview" class="preview"></div>
            </div>

            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="projectTitle" class="form-label">Project Title</label>
                <input type="text" class="form-control" id="projectTitle" name="projectTitle" maxlength="50" required>
            </div>

            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="creator" class="form-label">Creator</label>
                <input type="text" class="form-control" id="creator" name="creator" maxlength="50" required>
            </div>

            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control" id="year" name="year" min="1000" max="9999" required>
            </div>

            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="category" class="form-label">Category</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Category1">Category1</option>
                    <option value="Category2">Category2</option>
                    <option value="Category3">Category3</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <div id="projectPicsContainer" class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="projectPics" class="form-label">Pictures/Videos</label>
                <input type="file" class="form-control" id="projectPics" name="projectPics[]" multiple>
                <div id="picsPreview" class="preview"></div>
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: red; border: none; border-radius: 0px;">Submit</button>
        </form>

        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // PHP code to handle form submission and database insertion
              $servername = "localhost"; // Change if your database is on a different server
              $username = "root";
              $password = "";
              $database = "phpmyadmin";

              $conn = new mysqli($servername, $username, $password, $database);

              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }

              function sanitizeInput($conn, $data) {
                  return mysqli_real_escape_string($conn, htmlspecialchars($data));
              }

              $projectTitle = sanitizeInput($conn, $_POST["projectTitle"]);
              $creator = sanitizeInput($conn, $_POST["creator"]);
              $year = sanitizeInput($conn, $_POST["year"]);
              $category = sanitizeInput($conn, $_POST["category"]);

              // File upload handling for project_cover_pic
              $projectCoverPic = ""; // Initialize variable to store file name
              if (isset($_FILES['projectCoverPic'])) {
                  $file = $_FILES['projectCoverPic'];
                  $fileName = $file['name'];
                  $fileTmpName = $file['tmp_name'];
                  $fileError = $file['error'];
                  if ($fileError === 0) {
                      // Specify the upload directory path
                      $uploadDirectory = 'C:/xampp/htdocs/Web-Programming/Front End/images/Upload/';
                      $projectCoverPic = uniqid('', true) . '_' . $fileName; // Generate unique file name
                      // Move the uploaded file to the upload directory
                      if (move_uploaded_file($fileTmpName, $uploadDirectory . $projectCoverPic)) {
                      } else {
                      }
                  }
              }

              // File upload handling for project_pics
              $projectPics = ""; // Initialize variable to store file names
              if (isset($_FILES['projectPics'])) {
                  $projectPicsArray = array();
                  $files = $_FILES['projectPics'];
                  $fileCount = count($files['name']);
                  for ($i = 0; $i < $fileCount; $i++) {
                      $fileName = $files['name'][$i];
                      $fileTmpName = $files['tmp_name'][$i];
                      $fileError = $files['error'][$i];
                      if ($fileError === 0) {
                          // Specify the upload directory path
                          $uploadDirectory = 'C:/xampp/htdocs/Web-Programming/Front End/images/Upload/';
                          $projectPic = uniqid('', true) . '_' . $fileName; // Generate unique file name
                          // Move the uploaded file to the upload directory
                          if (move_uploaded_file($fileTmpName, $uploadDirectory . $projectPic)) {
                              $projectPicsArray[] = $projectPic;
                          } else {
                          }
                      }
                  }
                  $projectPics = implode(',', $projectPicsArray); // Convert array to comma-separated string
                }
              // Insert data into database
              $sql = "INSERT INTO projects (project_cover_pic, project_title, creator, year, category, project_pics) 
                      VALUES ('$projectCoverPic', '$projectTitle', '$creator', '$year', '$category', '$projectPics')";

              $conn->query($sql);
              $conn->close();
          }
        ?>
    </div>

<script>
    function previewFiles(input, previewContainer) {
        const files = input.files;
        previewContainer.innerHTML = ''; // Clear previous previews
        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = (e) => {
                const url = e.target.result;
                let element;
                if (file.type.startsWith('image/')) {
                    element = document.createElement('img');
                    element.src = url;
                } else if (file.type.startsWith('video/')) {
                    element = document.createElement('video');
                    element.src = url;
                    element.controls = true;
                }
                if (element) {
                    previewContainer.appendChild(element);
                }
            };
            reader.readAsDataURL(file);
        });
    }

    function addNewInput(previewContainer) {
        const newInput = document.createElement('input');
        newInput.type = 'file';
        newInput.className = 'form-control';
        newInput.name = 'projectPics[]';
        newInput.multiple = true;
        newInput.addEventListener('change', function () {
            previewFiles(this, previewContainer);
            addNewInput(previewContainer);
        });
        document.getElementById('projectPicsContainer').appendChild(newInput);
    }

    function handleProjectPicsChange() {
        const previewContainer = document.getElementById('picsPreview');
        previewFiles(this, previewContainer);
        addNewInput(previewContainer);
    }

    document.getElementById('projectCoverPic').addEventListener('change', function () {
        previewFiles(this, document.getElementById('coverPicPreview'));
    });

    document.getElementById('projectPics').addEventListener('change', handleProjectPicsChange);
</script>
</body>
</html>