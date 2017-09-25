<?php
session_start();

//Redirection to login page via session
if (!isset($_SESSION['user_id'])) {

    echo '<script>alert("You have successfuly logged out")</script>';
    header("Location: login.php");

}

session_destroy();
header("Location: login.php");

