<?php
// Include this block at the top of your PHP file if needed for dynamic content
$title = "Overview";
$categories = [
    ["Digital Illustration / Animation", "path/to/illustration.jpg"],
    ["Graphic Design", "path/to/graphic_design.jpg"],
    ["Sculpture", "path/to/sculpture.jpg"],
    ["Photography", "path/to/photography.jpg"],
    ["Videography", "path/to/videography.jpg"],
    ["Web Design", "path/to/web_design.jpg"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- The rest of your HTML structure here -->
    <main>
        <section class="overview">
            <h1><?php echo $title; ?></h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
        </section>
        <section class="categories">
            <?php foreach ($categories as $category): ?>
                <div class="category">
                    <img src="<?php echo $category[1]; ?>" alt="<?php echo $category[0]; ?>">
                    <h2><?php echo $category[0]; ?></h2>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>
