<?php
    include_once "/xampp/htdocs/Web-Programming/common/connection.php";

    //REMEMBER PUT THISSSSSS TO ALL PAGEEEEEEEEEEEE
    session_start();

    if(!$_SESSION['loggedin']) {
        header("location: login_page.php");
    }
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
        <a href="/Back End/html/User Manage.php" style="margin-top: 60px;">User Management</a>
        <a href="/Back End/html/project.php">Projects</a>
        <a href="/Back End/html/Back.html">Log Out</a>
    </div>
    <!-- navbar end -->

    <div class="main3">
        <div class="row">
            <h2 style="font-size: 3rem; margin-top: 5rem; margin-bottom: 1.5rem; margin-left:30px;">Projects
                <a href="/Back End/html/projectAdd.php"><button type="submit" class="btn-add px-md-4"> Add </button></a>
            </h2>
        </div>

        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "project_database";

        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to fetch projects data
        $sql = "SELECT * FROM project";
        //SELECT * FROM user WHERE job_xxx_xxx = $job_xx_xx
        $result = $conn->query($sql);

        // Check if there are any projects
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Display project information
                echo '<div>
                        <div class="row" style="align-items: center; margin-bottom: 90px; margin-left:20px">
                            <img src="/Front End/images/Upload/' . $row["project_cover_pic"] . '" style="max-width: 1000px;" class="col-md-5">
                            <span class="col-md-7">
                                <h1 class="prtitle">' . $row["project_title"] . '</h1>
                                <h2 class="byyear">By: ' . $row["author_name"] . '</h2>
                                <h3 class="byyear" style="margin-bottom: 40px;">Year: ' . $row["year_created"] . '</h3>
                                <h4>
                                    <a href="/Back End/html/projectEdit.php?project_id=' .$row['project_id'] . '"><button type="submit" class="btn-add"> Edit </button></a>
                                    <a href="/Back End/html/projectDelete.php?project_id=' . $row['project_id'] . '"><button type="submit" class="btn-add"> Delete </button></a>
                                </h4>
                            </span>
                        </div>
                    </div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

        
    </div>

</body>

</html>
