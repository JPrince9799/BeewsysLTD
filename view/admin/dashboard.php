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
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
    <link rel="icon" type="image/png" href="../img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dashboard - YouCheckedIn</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../img/sidebar-2.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | maroon | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href=# class="simple-text">
                    YouCheckedIn <br><br> <?php echo $sessName . "<br>" . "___________________". "<br>" .$admin;?>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
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
                        <a class="nav-link" href="./editroom.php">
                            <i class="nc-icon nc-settings-tool-66"></i>
                            <p>Edit Rooms</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./manageroom.php">
                            <i class="nc-icon nc-preferences-circle-rotate"></i>
                            <p>Manage Rooms</p>
                        </a>
                    </li>
                    <li>
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
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <a class="navbar-brand mx-auto" href="#"> Dashboard </a>
                        <ul class="nav navbar-nav mr-auto">
                            
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right ml-auto">

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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">User Statistics</h4>
                                    <p class="card-category">User Participation</p>
                                </div>
                                <div class="card-body ">
                                    <div  class="ct-bar"></div>
                                    <script>
                                    var data = {
                                        // A labels array that can contain any sort of values
                                        labels: ['MATH123', 'CS102', 'PreCalc', 'Precalc 2'],
                                        // Our series array that contains series objects or in this case series data arrays
                                        series: [
                                            [4, 2, 1, 3]
                                         ]};
                                         // Create a new line chart object where as first parameter we pass in a selector
                                         // that is resolving to our chart container element. The Second parameter
                                         // is the actual data object.
                                         new Chartist.Bar('.ct-bar', data);
                                    </script>
                                    <div class="legend">
                                        
                                        <i class="fa fa-circle text-danger"></i> Students Checked in
                                        
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Checked Recently
                                    </div>
                                </div>
                            </div>
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
                            GIJeJo
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
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>


</html>