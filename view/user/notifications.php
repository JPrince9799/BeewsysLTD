<?php 

require('../../controller/session.php');

if(isset($_SESSION['admin_id'])){
	$admin = "Administrator";
	$sessName = $_SESSION['name'];
}
else{
    header('Location: ../../index.php');
}
?>

<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
    <link rel="icon" type="image/png" href="../img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Notifications - YouCheckedIn</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href=# class="simple-text">
                    YouCheckedIn <br><br> <?php echo $sessName . "<br>" . "___________________". "<br>" . $admin;?>
                </a>
                </div>
               
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <div class="logo">
                        <a href=# class="simple-text">
                        Rooms
                    </a>
                    </div>
                    <li>
                        <a class="nav-link" href="./newroom.php">
                            <i class="nc-icon nc-simple-add"></i>
                            <p>New Rooms</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./viewroom.php">
                            <i class="nc-icon nc-grid-45"></i>
                            <p>View Rooms</p>
                        </a>
                    </li>
                  
                    <li>
                        <a class="nav-link" href="./manageroom.php">
                            <i class="nc-icon nc-preferences-circle-rotate"></i>
                            <p>Manage Rooms</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./notifications.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                  
                </ul>
            </div>
        </div>
        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Notifications </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-right navbar-nav ml-auto">
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="../../controller/logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <img src="../img/default-avatar.png" class="rounded-circle z-depth-3" alt="Display Image" style="width: 30px; height: 30px">
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                                    <a class="dropdown-item" href="../../changepassword.php" >Change Password</a>
                                    <a class="dropdown-item" href="../../controller/logout.php">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Notifications</h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>
                                        <small>Notifications</small>
                                    </h5>
                                    <div class="alert alert-info">
                                        <span>You have Checkins to manage! </span>
                                    </div>
                                    
                                </div>
                            </div>
                            <br>
                            <br>
                            
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
   
</body>
<!--   Core JS Files   -->
<script src="../js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../js/core/popper.min.js" type="text/javascript"></script>
<script src="../js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="../js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the pages etc -->
<script src="../js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>


</html>