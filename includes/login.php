<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'config/dbcon.php';
    require_once 'log_func.php';

    loginAdmin($con, $username, $pwd);
} else {
    header("location: login.php");
    exit();
}