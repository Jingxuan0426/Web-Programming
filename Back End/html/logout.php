<?php
    session_start();

    $_SESSION["loggedin"] = false;
    $_SESSION["username"] = "";
    $_SESSION["role"] = "";

    header("location: login_page.php");
?>