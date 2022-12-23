<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="assets/css/sidenav.css">
    
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class ="sidebar">
        <div class="logo-details">
            <a href="home.php"><i class='bx bxl-steam mt-3'></i></a>
            <span class="logo_name mt-3">System Name</span>
        </div>
        <hr style="color: #FFF">
        <ul class="nav-links list-unstyled">
            <li>
                <a href="home.php">
                    <i class='bx bx-home' ></i>
                    <span class="link_name">Home</span>
                </a>
                    <ul class="sub-menu blank">
                        <li><a href="#" class="link_name">Home</a></li>
                    </ul>
            </li>
            <li>
                <a href="view.php">
                    <i class='bx bxs-user-account'></i>
                    <span class="link_name">View User</span>
                </a>
                    <ul class="sub-menu blank">
                        <li><a href="#" class="link_name">View User</a></li>
                    </ul>
            </li>
            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class='bx bxs-user-detail ' ></i>
                        <span class="link_name ">Resident File</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                    <ul class="sub-menu">
                        <li><a class="link_name">Resident File</a></li>
                        
                        <li><a href="res_list.php">List of Resident</a></li>
                        <!-- <li><a href="#">Add New Resident</a></li> -->
                    </ul>
            </li>
            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class='bx bx-certification'></i>
                        <span class="link_name ">Certificates</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                    <ul class="sub-menu">
                        <li><a class="link_name">Certificates</a></li>
                        
                        <li><a href="#">Barangay Clearance</a></li>
                        <li><a href="#">CEDULA</a></li>
                    </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="assets\usericon.png" alt="profile">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Username</div>
                        <div class="role">Admin</div>
                    </div>
                    <a href="logout.php"><i class='bx bxs-log-out'></i></a>
                </div>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="dashboard">Dashboard</span>
            </div>
        </nav>
    </section> 

<script>

// For Dropdown //
let arrow = document.querySelectorAll(".arrow");
  for (let index = 0; index < arrow.length; index++) {
    const element = arrow[index].addEventListener("click", (e)=> {
      let arrowParent = e.target.parentElement.parentElement;
      console.log(arrowParent);
        arrowParent.classList.toggle("showMenu");
    });
  }



let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".fa-bars");
    
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("close");
    };

</script>

</body>
</html>