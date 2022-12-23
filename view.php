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

    <link rel ="stylesheet" type="text/css" href="assets/css/view.css">
    <link rel ="stylesheet" type="text/css" href="assets/css/sidenav.css">
    
    <title>PHP CRUD Application</title>

    <style>
        .sidebar.close ~ .view_wrapper{
    padding-left: 98px; 
    transition: all 0.3s ease;
    }
    </style>

</head>
<body>

<?php include "sidenav.php";?>
      
<div class="view_wrapper">
    <h4 class="fs-3 m-4 mb-4 navbartop">PHP Crud Application</h4>

    <div class="wrapper">

            <!-- New User -->
            <?php
                if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];
                    echo'<div class="alert alert-success alert-dismissible fade show" style="height: 60px;transition: all 0.3s ease" role="alert">
                    '.$msg.'
                    <button type="button" class="btn-close me-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
            ?>

            <!-- Delete User -->
            <?php
                if(isset($_GET['del'])){
                    $del = $_GET['del'];
                    echo'<div class="alert alert-danger alert-dismissible fade show" style="height: 60px;transition: all 0.3s ease" role="alert">
                    '.$del.'
                    <button type="button" class="btn-close me-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
            ?>

            <!-- Update User -->
            <?php
                if(isset($_GET['upd'])){
                    $upd = $_GET['upd'];
                    echo'<div class="alert alert-info alert-dismissible fade show" style="height: 60px;transition: all 0.3s ease" role="alert">
                    '.$upd.'
                    <button type="button" class="btn-close me-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
            ?>

            <!-- ADD NEW BUTTON -->
            <button type="button" class="btn btn-dark mb-3 addbtn">
            Add New
            </button>
          
    <!-- Table -->
                <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Email</th>
                <th style = "display:none">Password</th>
                <th scope="col">Birthday</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            <?php


                $sql = "SELECT * FROM `admin`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                ?>
                    
                <tr>
                    <td class="viewtd" ><strong><?php echo $row['id'] ?></strong></td>
                    <td class="viewtd" ><?php echo $row['firstname'] ?></td>
                    <td class="viewtd" ><?php echo $row['lastname'] ?></td>
                    <td class="viewtd" ><?php echo $row['mobile'] ?></td>
                    <td class="viewtd" ><?php echo $row['email'] ?></td>
                    <td style ="display:none"><?php echo $row['password'] ?></td>
                    <td class="viewtd" ><?php echo $row['birthday'] ?></td>
                    <td class="viewtd" ><?php echo $row['gender'] ?></td>
                    <td>
                        <button class="btn btn-success editbtn">Edit</button>

                        <button class="btn btn-danger deletebtn">Delete</button>

                    </td>

                </tr>
                    <?php
                    }

                ?>

            </tbody>
            </table>
            <!-- END OF TABLE --> 
    </div>
</div>

<script>

 //CALL MODAL EDIT USER 
    $(document).ready(function() { 
        $('.editbtn').on('click', function() {
            
            $('#edituser').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#id').val(data[0]);
                $('#firstname').val(data[1]);
                $('#lastname').val(data[2]);
                $('#mobile').val(data[3]);
                $('#email').val(data[4]);
                $('#password').val(data[5]);
                $('#birthday').val(data[6]);
                $('#gender').val(data[7]);
        });
    });

    
 //CALL MODAL NEW USER   
    $(document).ready(function() { 
        $('.addbtn').on('click', function() {
            $('#addbtn').modal('show');
        });
    });

//CALL MODAL DELETE USER 
    $(document).ready(function() { 

        $('.deletebtn').on('click', function() {
            
            $('#deleteuser').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#del_id').val(data[0]);
        });
    });


</script>

<?php include "modal/modal_addnew.php";
      include "modal/modal_edit.php";
      include "modal/modal_delete.php"; ?>

</body>
</html>

<?php


}else{
    header("Location: login.php");
    exit();
    }

?>