<?php
include "config.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middlename'];
    $last_name = $_POST['last_name'];
    $ext = $_POST['ext'];
    $bday = $_POST ['bday_'];
    $age = $_POST ['age_'];
    $bplace = $_POST ['bplace_'];
    $gender = $_POST ['gender_'];
    



        $sql = "INSERT INTO `resident`(`res_id`, `first_name`, `middle_name`, `last_name`, `ext`, `birthdate`, `age`, `pof_birth`, `gender`, `civil`, `nation`, `religion`, `ed_att`, `emp_stat`, `job`, `vote_stat`, `voters_id`, `sss`, `c_street`, `c_brgy`, `c_city`, `c_region`, `c_country`, `c_zip`, `p_street`, `p_brgy`, `p_city`, `p_region`, `p_country`, `p_zip`, `contact`, `email`, `res_status`, `res_date`, `e_name`, `e_contact`, `e_add`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]','[value-30]','[value-31]','[value-32]','[value-33]','[value-34]','[value-35]','[value-36]','[value-37]')";
        
        $result = mysqli_query($conn, $sql);

        if($result) {
            header("Location: ../view.php?msg=New record created succesfully");
        
        }else {
            echo "Failed: " . mysqli_error($conn);
        }

    }



?>

</body>
</html>


