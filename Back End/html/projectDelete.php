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
if (isset($_GET['project_id'])) {
    $project_id = intval($_GET['project_id']); // Convert to integer for security

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM project WHERE project_id = ?");
    $stmt->bind_param("i", $project_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Project deleted successfully.";
        // Redirect back to the project listing page after deletion
        header("Location: /Back End/html/project.php");
        exit;
    } else {
        echo "Error deleting project: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "No project ID provided.";
 }

$conn->close();
?>