<?php
include "config.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];


    if($password == $cpassword){


        $sql = "INSERT INTO `admin` (`firstname`, `lastname`, `mobile`, `email`, `password`, `birthday`, `gender`) VALUES ('$first_name','$last_name','$mobile','$email','$password','$birthday','$gender')";
        
        $result = mysqli_query($conn, $sql);

        if($result) {
            header("Location: ../view.php?msg=New record created succesfully");
        
        }else {
            echo "Failed: " . mysqli_error($conn);
        }

    }}else{
     //header("Location: add_new.php?error=Password not match!");

    }



?>

<script src-"script.js"></script>
</body>
</html>


