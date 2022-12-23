<?php

include "config.php";

if(isset($_POST['deluser'])){

        $id = $_POST['del_id'];

        $sql = "DELETE FROM `admin` WHERE id = $id";

        $result = mysqli_query($conn, $sql);

            if($result){
                header("Location: ../view.php?del=Record has been deleted");
            }
            else{
                echo "Failed: " . mysqli_error($conn);
            }
}

?>

