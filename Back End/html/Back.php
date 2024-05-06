<?php
include_once "/xampp/htdocs/Web-Programming/common/connection.php";

$message = "";

if(isset($_POST["login"])){
    
    //1) Collect Inputs from the form
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    
    //2) Select record that matches inputs from the form
    $sql = $connection->prepare("SELECT * FROM user WHERE user_email = ?");
    
    //3) Execute the SQL statement
    $sql->execute([$email]);
    
    //4) Collect the record from SQL
    $result = $sql->fetch();
    
    if($result && password_verify($pwd, $result["user_password"])){
        header("Location: User Manage.php");
    }
    else {
        $message = "Byee";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="/Back End/css/Back.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
</head>

<body class="overflow-x-hidden" style="background-color: black;">

    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/Back End/images/new logo black.png" alt="logo" width="90" height="90">
            </a>
        </div>
    </nav>
    <!-- navbar end -->

    <div class="front">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>Spectrum Studio</h1>
            <div class="mb-3 col-sm-4"><input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="Email"
                    aria-label="Email">
            </div>
            <div class="mb-2 col-sm-4"><input class="form-control form-control-lg" type="password" id="pwd" name="pwd" placeholder="Password"
                    aria-label="Password">
            </div>

            <a href="" target="_blank">
            <h3>FORGOT PASSWORD?</h3>
        </a>
        <a href="/Back End/html/User Manage.html"><button type="button" class="btn-login" value="login" name="login" id="login">LOG IN</button></a>

            <?php echo $message; ?>
        </form> 
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=100092615201359" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/chill_cafe_97/" target="_blank"><i
                                class="fab fa-instagram"></i></a>

                        <h5 style="margin-top: 10px; margin-bottom: 3rem;">@ spectrumstudio</h5>
                        <h5>169 Jalan ABC</h5>
                        <h5>53300 Kuala Lumpur</h5>
                        <h5>Email : spectrumstudio2024@gmail.com </h5>
                        <h5>Tel : 011-52645876</h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>