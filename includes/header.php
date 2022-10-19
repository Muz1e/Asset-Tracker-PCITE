<?php 
session_start();

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Trackerverse</title>
    <link rel="stylesheet" href="styles/index.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="page">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <img class="logo-sidebar" src="images/pnp logo.png" />
                    </div>
                    <div class="brand-name-container">
                        <p class="brand-name">
                            Trackerverse<br />
                            <!-- <span class="brand-subname">
                                Tracking website
                            </span> -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="navigation-list">
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="index.php">
                            <div class="row">
                                <div class="col-9">
                                    Dashboard
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="#">
                            <div class="row">
                                <div class="col-9">
                                    Evidence
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item active">
                        <a class="navigation-link" href="#">
                            <div class="row">
                                <div class="col-9">
                                    Vehicles
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="weapon_monitoring.php">
                            <div class="row">
                                <div class="col-9">
                                    Weapons
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="it_equipment_monitoring.php">
                            <div class="row">
                                <div class="col-9">
                                    IT Equipments
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="#">
                            <div class="row">
                                <div class="col-9">
                                    Uniforms
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a class="navigation-link" href="includes/logout.php">
                            <div class="row">
                                <div class="col-9">
                                    Logout
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="content">
            <div class="navigationBar">
                <button id="sidebarToggle" class="btn sidebarToggle">
                    <i class="fas fa-bars"></i>
                    </a>
            </div>
        </div>

    </div>