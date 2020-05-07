<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR  . "autoload.php";
session_start();
if (!$_SESSION["logged"]) {
    header("location:login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- <script src="libs/jquery/jquery-3.3.1.slim.min.js"></script> -->
    <script src="libs\jquery\jquery-3.5.1.min.js"></script>


    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="menu navbar-brand col-sm-12 col-md-12 mr-0" href="index.php">Vozový park</a>







    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar sidebar-sticky">
                    <ul class="nav flex-column">
                        <?php if ($_SESSION["userRole"] == "1" || $_SESSION["userRole"] == "2" || $_SESSION["userRole"] == "3") {
                        ?> <li>
                        <a class="active-menu waves-effect waves-dark" href="cars.php"><i class="fa fa-dashboard"></i> Vozidla</a>
                    </li>
                        <?php
                        }
                        ?>

                        <?php if ($_SESSION["userRole"] == "1" || $_SESSION["userRole"] == "4") {
                        ?> <li>
                        <a class="active-menu waves-effect waves-dark" href="rides.php"><i class="fa fa-dashboard"></i> Jízdy</a>
                    </li>

                        <?php
                        }
                        ?>

                        <?php if ($_SESSION["userRole"] == "1") {
                        ?> <li>
                        <a class="active-menu waves-effect waves-dark" href="employees.php"><i class="fa fa-dashboard"></i> Uživatelé</a>
                    </li>

                          

                        <?php
                        } ?>


                        <?php if ($_SESSION["userRole"] == "1" || $_SESSION["userRole"] == "3") {
                        ?> <li>
                        <a class="active-menu waves-effect waves-dark" href="car_driver.php"><i class="fa fa-dashboard"></i> Přidělení aut</a>
                    </li>

                        <?php
                        }
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <b>Odhlásit se</b> </a>
                        </li>








                    </ul>


                    </ul>
                </div>
            </nav>

            <main role="main" class="main col-md-9 ml-sm-auto col-lg-10 px-4">
</head>

<body>