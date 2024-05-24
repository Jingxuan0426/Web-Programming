<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $host = "localhost"; // Your host
    $username = "root"; // Your database username
    $password = ""; // Your database password
    $dbname = "project_database"; // Your database name

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    // Query to check credentials
    $query = "SELECT * FROM user WHERE username = :username";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    // Check if user exists
    if ($stmt->rowCount() == 1) {
        $data = $stmt->fetchAll();

        if(password_verify($password, $data[0]["password"])) {
            // Start session and store user information
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["role"] = $data[0]["role"];
            $_SESSION["user_id"] = $data[0]["user_id"];

            // Redirect to admin dashboard or another page
            if($data[0]["role"] == "admin")
                header("location: User Manage.php");
            else
                header("location: /Front End/html/overview_page.php");
        }
        else {
            // Invalid credentials
            $error = "Invalid credentials";

            header("location: login_page.php?error=".$error);
        }

    } else {
        // Invalid credentials
        $error = "Invalid username";

        header("location: login_page.php?error=".$error);
    }
}
?>