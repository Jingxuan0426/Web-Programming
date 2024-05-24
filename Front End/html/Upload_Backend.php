<?php
session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$location = $_POST["location"];
$field = $_POST["field"];
$job_position = $_POST["job_position"];
$job_type = $_POST["job_type"];
$project_title = $_POST["project_title"];
$year_created = $_POST["year_created"];
$category = $_POST["category"];
$files = $_FILES['files']['name'];

$user_id = $_SESSION['user_id'];

include "../../common/connection.php";

//UPDATE USER DETAILS
$query = "UPDATE user SET 
        user_contact = :user_contact, 
        user_location = :location, 
        job_specialized_field = :field,
        job_position = :job_position,
        job_type = :job_type,
        name = :name,
        email = :email,
        WHERE user_id = :user_id
    ";

$sth = $pdo->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sth->execute([
    'user_contact' => $contact, 
    'location' => $location, 
    'field' => $field, 
    'job_position' => $job_position, 
    'job_type' => $job_type,
    'name' => $name,
    'email' => $email,
    'user_id' => $user_id
]);

//Create Project
$project_query = "INSERT into project (
    project_title,
    author_name,
    category_id,
    user_id,
    year_created
) VALUES (
    :project_title,
    :author_name,
    :category_id,
    :user_id,
    :year_created
)";

$sth = $pdo->prepare($project_query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

$sth->execute([
    'project_title' => $project_title,
    'author_name' => $name,
    'category_id' => $category,
    'user_id' => $user_id,
    'year_created' => $year_created
]);

$project_id = $pdo->lastInsertId();

//Create Image
$category_query = "SELECT * FROM category WHERE category_id = " . $category;
$sth = $pdo->prepare($category_query);
$sth->execute();
$category_data = $sth->fetchAll();

//CREATE FOLDER
$file_directory = "C:/xampp/htdocs/Web-Programming/Front End/images/";
if (!file_exists($file_directory . $category_data[0]['category_name'] . "/" . $project_title )) {
    mkdir($file_directory . $category_data[0]['category_name'] . "/" . $project_title, 0777, true);
}

//STORE FILE
$image_query = "INSERT into image (
    project_id,
    image_name,
    image_type,
    image_location
) VALUES (
    :project_id,
    :image_name,
    :image_type,
    :image_location
)";

$sth = $pdo->prepare($image_query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

$i = 0;
foreach($_FILES['files']['tmp_name'] as $files) {
    move_uploaded_file($files, $file_directory . $category_data[0]['category_name'] . "/" . $project_title . "/" . $_FILES['files']['name'][$i]);

    if($i == 0){
        $sth->execute([
            'project_id' => $project_id,
            'image_name' => $_FILES['files']['name'][$i],
            'image_type' => 'category',
            'image_location' => "/Front End/images/" . $category_data[0]['category_name'] . "/" . $project_title . "/" . $_FILES['files']['name'][$i],
        ]);
    }
    else if ($i == 1) {
        $sth->execute([
            'project_id' => $project_id,
            'image_name' => $_FILES['files']['name'][$i],
            'image_type' => 'cover',
            'image_location' => "/Front End/images/" . $category_data[0]['category_name'] . "/" . $project_title . "/" . $_FILES['files']['name'][$i],
        ]);
    }
    else {
        $sth->execute([
            'project_id' => $project_id,
            'image_name' => $_FILES['files']['name'][$i],
            'image_type' => 'image',
            'image_location' => "/Front End/images/" . $category_data[0]['category_name'] . "/" . $project_title . "/" . $_FILES['files']['name'][$i],
        ]);
    }

    $i++;
}

header("location: /Front End/html/overview_page.php");