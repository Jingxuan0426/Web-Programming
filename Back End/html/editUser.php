<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_contact = $_POST['user_contact'];

    $user_location = $_POST['user_location'];
    $user_id = $_POST['user_id'];
    $job_specialized_field = $_POST['job_specialized_field'];
    $job_position = $_POST['job_position'];
    $job_type = $_POST['job_type'];

    // MySQL connection parameters
    $servername = "localhost"; // Change if your MySQL server is hosted elsewhere
    $db_username = "root"; // Change to your MySQL username
    $db_password = ""; // Change to your MySQL password
    $database = "project_database"; // Change to your MySQL database name

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to update user details
    $sql = "UPDATE user SET 
    username=?, email=?, user_contact=?, user_location=?, job_specialized_field=?, job_position=?, job_type=?
    WHERE user_id=?";

    // Prepare and bind
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssssi", $username, $email, $user_contact, $user_location, $job_specialized_field, $job_position, $job_type, $user_id);

        // Execute the query
        if ($stmt->execute()) {
            echo "User details updated successfully";
            header("Location: User Manage.php");
        } else {
            echo "Error updating user details: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing the query: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="/Back End/css/User Details.css">
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
        <a href="/Back End/html/User Manage.html" style="margin-top: 60px;">User Management</a>
        <a href="#">Projects</a>
        <a href="/Back End/html/logout.php">Log Out</a>
    </div>
    <!-- navbar end -->

    <div class="main">
        <h2 style="font-size: 3rem; margin-top: 5rem;">User Details</h2>
        <?php
        // MySQL connection parameters
        $servername = "localhost"; // Change if your MySQL server is hosted elsewhere
        $db_username = "root"; // Change to your MySQL username
        $db_password = ""; // Change to your MySQL password
        $database = "project_database"; // Change to your MySQL database name

        // Create connection
        $conn = new mysqli($servername, $db_username, $db_password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Assuming you are passing the user ID through the URL as 'user_id'
        $user_id = $_GET['user_id'];

        // SQL query to fetch user details based on user ID
        $sql = "SELECT * FROM user WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $username = $row['username'];
            $email = $row['email'];
            $user_contact = $row['user_contact'];
            $user_location = $row['user_location'];
            $job_specialized_field = $row['job_specialized_field'];
            $job_position = $row['job_position'];
            $job_type = $row['job_type'];

            // Outputting the form with pre-filled values
            echo "
            <form method='post'>
                <input type='hidden' name='user_id' value='$user_id'> <!-- Hidden input field to store user_id -->
                <div class='row mb-3' style='margin-top: 30px;'>
                    <label for='inputName3' class='col-sm-2 col-form-label'>Name</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='inputName3' name='username' value='$username'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='inputEmail3' class='col-sm-2 col-form-label'>Email</label>
                    <div class='col-sm-8'>
                        <input type='email' class='form-control' id='inputEmail3' name='email' value='$email'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='inputContact3' class='col-sm-2 col-form-label'>Contact</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='inputContact3' name='user_contact' value='$user_contact'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='inputLocation3' class='col-sm-2 col-form-label'>Location</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='inputLocation3' name='user_location' value='$user_location'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='inputField3' class='col-form-label'>Specialized Field</label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' id='inputField3' name='job_specialized_field' value='$job_specialized_field'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='inputPosition3' class='col-form-label'>Occupation/Desired Job Position</label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' id='inputPosition3' name='job_position' value='$job_position'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='inputType3' class='col-form-label'>Part-Time/Full-Time/Freelance</label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' id='inputType3' name='job_type' value='$job_type'>
                    </div>
                </div>
                <button type='submit' class='btn-view'>Save</button>
            </form>";
        } else {
            echo "No user found.";
        }

        // Close connection
        $stmt->close();
        $conn->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
