<?php
include "db/config.php";
include "assets/css/link.php";
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>


<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset ="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel ="stylesheet" type="text/css" href="assets/css/home.css">
    
    <title>PHP CRUD Application</title>

    <style>

    .sidebar.close ~ .home_wrapper{
    padding-left: 98px; 
    transition: all 0.3s ease;
    }
    </style>

</head>
<body>

<?php 
    include "sidenav.php";
?>


<div class="home_wrapper">
    <h4 class="fs-3 m-4 navbartop">PHP Crud Application</h4>
</div>


</body>
</html>

<?php

}else{
    header("Location: login.php");
    exit();
    }

?>