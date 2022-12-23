<?php
include "db/config.php";
include "functions/functions.php";
include "assets/css/link.php";
session_start();
    

if(isset($_POST['login'])){

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if(empty($email)){
        header("Location: login.php?error=Email address is required");
        exit();

    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();

    }else{

        $sql = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($conn, $sql);
        
        $fetch = mysqli_num_rows($result);
        
        if($fetch === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION ['email'] = $row['email'];
                $_SESSION ['id'] = $row['id'];

                header("Location: home.php?msg=Login successfully");
            }else{
                header("Location: login.php?error=Wrong Email Address or Password");
                exit();
            }

        } else {
            header("Location: login.php?error=Wrong Email Address or Password");
                exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel ="stylesheet" type="text/css" href="assets/css/login.css">

    <title>Log in</title>

</head>
<body>
    <div class="container">        

        <form action="" method="post" class="login-email">


            <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                echo'<div class="alert alert-danger" style="padding: 2px 10px; margin: 10px auto" role="alert">
                '.$error.'
              </div>';
            }
            ?>

            <div class="input-group">
                <i class="fa fa-user fa-2x fs-3 me-2" aria-hidden="true"></i> 
                <input type="text" name="email" placeholder="Email">
                
            </div>
            
            <div class="input-group">
                <i class="fa fa-lock fa-2x cust fs-3 me-2" aria-hidden="true"></i>
                <input type="password" name="password" placeholder="Password">

            </div>
            <br>

            <div class="input-group">
                <button class="btn" name="login">Login</button>
            </div>
            
        </form>
    </div>

</body>
</html>