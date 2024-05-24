<?php
    include_once "/xampp/htdocs/Web-Programming/common/connection.php";

    //REMEMBER PUT THISSSSSS TO ALL PAGEEEEEEEEEEEE
    session_start();

    if(!$_SESSION['loggedin']) {
        header("location: login_page.php");
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Management</title>
    <link rel="stylesheet" href="/Back End/css/User Manage.css">
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
        <a href="/Back End/html/User Manage.php" style="margin-top: 60px;">User Management</a>
        <a href="/Back End/html/project.php">Projects</a>
        <a href="/Back End/html/logout.php">Log Out</a>
    </div>
    <!-- navbar end -->

    <div class="main3">
        <h2 style="font-size: 3rem; margin-top: 5rem; margin-bottom: 1.5rem;">User Management</h2>
        <a href="/Back End/html/Submit User.html"><button type="submit" class="btn-add px-md-4">Add User+</button></a>
        <a href="/Back End/html/Ban User.html"><button type="submit" class="btn-ban px-md-4">Banned User</button></a>
    
        <?php 
            $servername = "localhost"; // Change if your MySQL server is hosted elsewhere
            $username = "root"; // Change to your MySQL username
            $password = ""; // Change to your MySQL password
            $database = "phpmyadmin"; // Change to your MySQL database name

            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) { 
                echo "Connect failed";
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data from the profile table
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<div class='card' style='width: 75rem;'>";
                echo "<div class='card-body'>";
                echo "<h1 class='card-title'>User " . $row['user_id'] . "</h1>";
                echo "<p class='card-text'>Name: " . $row['username'] . "</p>";
                echo "<p>Email: " . $row['user_email'] . "</p>";
                echo "<p>Contact: " . $row['user_contact'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "<a href='/Back End/html/editUser.php?user_id=".$row['user_id']."'><button type='submit' class='btn-edit'>Edit User</button></a>";
                echo "<button type='submit' class='btn-user'>Ban User</button>";
            }

            $conn->close();
        ?>
    </div>

    <!-- <div class="main3">
        <h2 style="font-size: 3rem; margin-top: 5rem; margin-bottom: 1.5rem;">User Management</h2>
        <a href="/Back End/html/Submit User.html"><button type="submit" class="btn-add px-md-4">Add User+</button></a>
        <a href="/Back End/html/Ban User.html"><button type="submit" class="btn-ban px-md-4">Banned User</button></a>
        <div class="card" style="width: 75rem;">
            <div class="card-body">
              <h1 class="card-title">User 1</h1>
              <p class="card-text">Name: Ochibala</p>
              <p>Email:    ochi12@gmail.com</p>
              <p>Contact: 014-556 7947</p>
            </div>
        </div>
        <a href="/Back End/html/Edit User.html"><button type="submit" class="btn-edit">Edit User</button></a>
        <button type="submit" class="btn-user">Ban User</button>

        <div class="card" style="width: 75rem;">
            <div class="card-body">
              <h1 class="card-title">User 2</h1>
              <p class="card-text">Name: Kungkingkingkang</p>
              <p>Email:    kung3k@gmail.com</p>
              <p>Contact: 015-789 1223</p>
            </div>
        </div>
        <a href="/Back End/html/Edit User.html"><button type="submit" class="btn-edit">Edit User</button></a>
        <button type="submit" class="btn-user">Ban User</button>

        <div class="card" style="width: 75rem;">
            <div class="card-body">
              <h1 class="card-title">User 3</h1>
              <p class="card-text">Name: Anwar Ibrahim</p>
              <p>Email:    anwarluvluv@gmail.com</p>
              <p>Contact: 018-3966 0312</p>
            </div>
        </div>
        <a href="/Back End/html/Edit User.html"><button type="submit" class="btn-edit">Edit User</button></a>
        <button type="submit" class="btn-user">Ban User</button>
        


    </div> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>