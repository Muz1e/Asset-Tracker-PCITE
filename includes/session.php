<?php
include 'config/dbcon.php';
session_start();

$user_check = $_SESSION['adminuid'];

$ses_sql = mysqli_query($con,"SELECT `admin_uid` FROM `admin_acc` WHERE `admin_uid` = '$user_check' ");

$row = mysqli_fetch_assoc($ses_sql);

$login_session = $row['admin_uid'];

if(!isset($_SESSION['adminuid'])){
    header("location:login.php");
    die();
 }
?>