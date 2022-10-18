<?php

$servername = "localhost";
$dbUsername = "root"; 
$dbPassword = "";
$dbname = "pcitehack"

$con = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

if(!$con){
    die("Connection Failed " . mysqli_connect_error());
}