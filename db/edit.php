<?php
include "config.php";

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];

    
        $sql = "UPDATE `admin` SET `firstname`='$first_name',`lastname`='$last_name',`mobile`='$mobile',`email`='$email',`password`='$password',`birthday`='$birthday',`gender`='$gender' WHERE id = $id";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header("Location: ../view.php?upd=Data updated successfully");
        }
        else {
            echo "Failed: " . mysqli_error($conn);
        }
    }


?>
