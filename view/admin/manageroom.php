<?php 

require('../../controller/session.php');

if(isset($_SESSION['id'])){
	$admin = "Administrator";
	$sessName = $_SESSION['name'];
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
    <title>New Room - YouCheckedIn</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../css/demo.css" rel="stylesheet" />
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
                    YouCheckedIn <br><br> <?php echo $admin . "<br>" .$sessName;?>
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
                    <li class="nav-item active">
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
                    <a class="navbar-brand" href="#"> Manage Room </a>
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
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
                            
                        </ul>
                        <ul class="navbar-nav nav navbar-right ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="../../controller/logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Manage Room</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Room Name</label>
                                                    <select type="text" class="form-control" placeholder="Lecture Hall">
                                                        <option> Economics 101 </option>
                                                        <option>Economics 202</option>
                                                        
                                                         <!-- NOTE:Provisional but should be pulled from db -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Max Room Capacity</label>
                                                    <input readonly type="number " class="form-control " value="40 ">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1 ">
                                                <div class="form-group ">
                                                    <label for="exampleIC">Current Capacity</label>
                                                    <input readonly type="number" class="form-control " placeholder="34">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-12 ">
                                                <div class="form-group ">
                                                    <label>Change Room Name</label>
                                                    <input type="text " class="form-control " placeholder="Room Name " value="Econs 101 Cohort A">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-4 pr-1 ">
                                                <div class="form-group ">
                                                    <label>Date</label>
                                                    <input type="date " class="form-control " placeholder="Date">
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1 ">
                                                <div class="form-group ">
                                                    <label>Start Time</label>
                                                    <input type="time" class="form-control " placeholder="Start Time">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1 ">
                                                <div class="form-group ">
                                                    <label>End Time</label>
                                                    <input type="time " class="form-control " placeholder="End Time ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Add Students</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike"> We will put the student checkbox thing here </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit " class="btn btn-info btn-fill pull-right ">Save Room</button>
                                        <div class="clearfix "></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid ">
                    <nav>
                        <ul class="footer-menu ">
                            <li>
                                <a href="# ">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center ">
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
<script src="../js/core/jquery.3.2.1.min.js " type="text/javascript "></script>
<script src="../js/core/popper.min.js " type="text/javascript "></script>
<script src="../js/core/bootstrap.min.js " type="text/javascript "></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../js/plugins/bootstrap-switch.js "></script>
<!--  Chartist Plugin  -->
<script src="../js/plugins/chartist.min.js "></script>
<!--  Notifications Plugin    -->
<script src="../js/plugins/bootstrap-notify.js "></script>
<!-- Control Center for Light Bootstrap Dashboard -->
<script src="../js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript "></script>


</html>