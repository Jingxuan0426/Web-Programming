<?php
// Set up PDO connection to your database
$host = 'localhost';
$dbname = 'project_database';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_contact = $_POST['user_contact'];
    $user_location = $_POST['user_location'];
    $user_id = $_POST['user_id'];
    $job_specialized_field = $_POST['job_specialized_field'];
    $job_position = $_POST['job_position'];
    $job_type = $_POST['job_type'];
    // Prepare SQL statement
    $stmt = $pdo->prepare("INSERT INTO user (username, email, user_contact, user_location, job_specialized_field, job_position, job_type) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");
    // Execute SQL statement
    $stmt->execute([$username, $email, $user_contact, $user_location, $job_specialized_field, $job_position, $job_type]);
    // Redirect to a success page or do something else after insertion
    header("Location: User Manage.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit User</title>
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
        <a href="/Back End/html/User Manage.php" style="margin-top: 60px;">User Management</a>
        <a href="#">Projects</a>
        <a href="/Back End/html/Back.html">Log Out</a>
    </div>
    <!-- navbar end -->

    <div class="main">
        <h2 style="font-size: 3rem; margin-top: 5rem;">User Details</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="row mb-3" style="margin-top: 30px;">
                <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputName3" name="username">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputContact3" class="col-sm-2 col-form-label">Contact</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputContact3" name="user_contact">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputLocation3" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputLocation3" name="user_location">
                </div>
            </div>

            <div class="mb-3 col-sm-10">
                <label for="inputField" class="form-label">Specialized Field</label>
                <input type="text" class="form-control" id="inputField" name="job_specialized_field">
            </div>
            <div class="mb-3 col-sm-10">
                <label for="inputOccupation" class="form-label">Occupation/Desired Job Position</label>
                <input type="text" class="form-control" id="inputOccupation" name="job_position">
            </div>
            <div class="mb-3 col-sm-10">
                <label for="inputJob" class="form-label">Part-Time/Full-Time/Freelance</label>
                <input type="text" class="form-control" id="inputJob" name="job_type">
            </div>
            <button type="submit" class="btn-view">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
