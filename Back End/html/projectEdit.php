<?php
// include_once "/xampp/htdocs/Web-Programming/common/connection.php";

// // Check if project ID is provided via GET request
// if(isset($_GET['project_id'])) {
//     $project_id = $_GET['project_id'];
    
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $database = "phpmyadmin";

//     $conn = new mysqli($servername, $username, $password, $database);

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Query to select project data by ID
//     $sql = "SELECT * FROM projects WHERE project_id = $project_id";
//     echo $sql;
//     $result = $conn->query($sql);

//     // Check if project data exists
//     if ($result->num_rows > 0) {
//         // Fetch project data
//         $row = $result->fetch_assoc();
//         $project_cover_pic = $row['project_cover_pic'];
//         $project_title = $row['project_title'];
//         $creator = $row['creator'];
//         $year = $row['year'];
//         $category = $row['category'];
//         $project_pics = $row['project_pics'];
//         // You can fetch other fields similarly
        
//         // Close the database connection
//         $conn->close();
//     } else {
//         echo "Project not found";
//     }
// }

include_once "/xampp/htdocs/Web-Programming/common/connection.php";

// Check if project ID is provided via GET request
if(isset($_GET['project_id'])) {
    $project_id = $_GET['project_id'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "phpmyadmin";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $project_title = $_POST['projectTitle'];
        $creator = $_POST['creator'];
        $year = $_POST['year'];
        $category = $_POST['category'];

        // Handle project cover picture update
        if ($_FILES['projectCoverPic']['name'] != '') {
            // Handle project cover picture upload
            $target_dir = "/xampp/htdocs/Web-Programming/Front End/images/Upload/";
            $target_file = $target_dir . basename($_FILES['projectCoverPic']['name']);
            move_uploaded_file($_FILES['projectCoverPic']['tmp_name'], $target_file);

            // Update project cover picture path in the database
            $project_cover_pic = basename($_FILES['projectCoverPic']['name']);
            $update_cover_pic_sql = "UPDATE projects SET project_cover_pic = '$project_cover_pic' WHERE project_id = $project_id";
            $conn->query($update_cover_pic_sql);
        }

        // Handle additional pictures/videos update
        if ($_FILES['projectPics']['name'][0] != '') {
            $additional_pics = '';
            foreach ($_FILES['projectPics']['name'] as $key => $file_name) {
                // Handle additional picture/video upload
                $target_dir = "/xampp/htdocs/Web-Programming/Front End/images/Upload/";
                $target_file = $target_dir . basename($file_name);
                move_uploaded_file($_FILES['projectPics']['tmp_name'][$key], $target_file);

                // Update additional pictures/videos paths in the database
                $additional_pics .= ($additional_pics != '' ? ',' : '') . basename($file_name);
            }
            $update_additional_pics_sql = "UPDATE projects SET project_pics = CONCAT(project_pics, '$additional_pics') WHERE project_id = $project_id";
            $conn->query($update_additional_pics_sql);
        }

        // Update other project details in the database
        $update_project_details_sql = "UPDATE projects SET project_title = '$project_title', creator = '$creator', year = $year, category = '$category' WHERE project_id = $project_id";
        $conn->query($update_project_details_sql);

        // Redirect to a success page or reload the current page after updating
        header("Location: project.php");
        exit();
    }

    // Query to select project data by ID
    $sql = "SELECT * FROM projects WHERE project_id = $project_id";
    echo $sql;
    $result = $conn->query($sql);

    // Check if project data exists
    if ($result->num_rows > 0) {
        // Fetch project data
        $row = $result->fetch_assoc();
        $project_cover_pic = $row['project_cover_pic'];
        $project_title = $row['project_title'];
        $creator = $row['creator'];
        $year = $row['year'];
        $category = $row['category'];
        $project_pics = $row['project_pics'];
        // You can fetch other fields similarly
        
        // Close the database connection
        $conn->close();
    } else {
        echo "Project not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Edit</title>
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

    <!-- <div class="sidenav">
        <a class="navbar-brand" href="#">
            <img src="/Back End/images/new logo red.png" alt="" width="90" height="90">
        </a>
        <a href="/Back End/html/User Manage.html" style="margin-top: 60px;">User Management</a>
        <a href="#">Projects</a>
        <a href="/Back End/html/Back.html">Log Out</a>
    </div> -->
    <!-- navbar end -->

    <div class="main3">
        <div class="row">
            <h2 style="font-size: 3rem; margin-top: 5rem; margin-bottom: 1.5rem; margin-left:4px;">Edit Projects</h2>
        </div>

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="projectCoverPic" class="form-label">Project Cover Picture</label>
                <img src="/Front End/images/Upload/<?php echo $project_cover_pic; ?>" class="form-control" id="projectCoverPic" name="projectCoverPic">
                <input type="file" class="form-control" id="projectCoverPic" name="projectCoverPic">
                <div id="coverPicPreview" class="preview"></div>
            </div>

            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="projectTitle" class="form-label">Project Title</label>
                <input type="text" class="form-control" id="projectTitle" name="projectTitle" maxlength="50" value="<?php echo $project_title; ?>" required>
            </div>

            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="creator" class="form-label">Creator</label>
                <input type="text" class="form-control" id="creator" name="creator" maxlength="50" value="<?php echo $creator; ?>" required>
            </div>

            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control" id="year" name="year" min="1000" max="9999" value="<?php echo $year; ?>" required>
            </div>

            <div class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="category" class="form-label">Category</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Category1" <?php if($category == 'Category1') echo 'selected'; ?>>Category1</option>
                    <option value="Category2" <?php if($category == 'Category2') echo 'selected'; ?>>Category2</option>
                    <option value="Category3" <?php if($category == 'Category3') echo 'selected'; ?>>Category3</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <div id="projectPicsContainer" class="mb-3 col-sm-12" style="margin-top: 40px; margin-bottom: 50px;">
                <label for="projectPics" class="form-label">Pictures/Videos</label>
                <!-- Display additional pictures/videos here -->
                <?php 
                // Explode project_pics into an array if it contains multiple file paths
                $project_pics_array = explode(',', $project_pics);
                foreach ($project_pics_array as $pic_path) {
                    echo '<img src="/Front End/images/Upload/' . $pic_path . '" class="preview">';
                }
                ?>
                <input type="file" class="form-control" id="projectPics" name="projectPics[]" multiple>
                <div id="picsPreview" class="preview"></div>
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: red; border: none; border-radius: 0px;">Submit</button>
        </form>
</body>

</html>
