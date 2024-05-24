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

// Check if project_id is set in the URL
if (isset($_GET['user_id'])) {
    $user_id = intval($_GET['user_id']); // Convert to integer for security

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM user WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "User banned.";
        // Redirect back to the project listing page after deletion
        header("Location: /Back End/html/User Manage.php");
        exit;
    } else {
        echo "Problem banning user: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "No user ID provided.";
 }

$conn->close();
?>