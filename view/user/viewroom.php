<?php 

require('../../controller/session.php');

if(isset($_SESSION['user_id'])){
	$sessName = $_SESSION['username'];
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
    <title>View Room - YouCheckedIn</title>
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
                        YouCheckedIn <br><br> <?php echo $sessName;?>
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
                   
                    <li class="nav-item active">
                        <a class="nav-link" href="./viewroom.php">
                            <i class="nc-icon nc-grid-45"></i>
                            <p>View Rooms</p>

                        </a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="./notifications.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item active active-pro">
                                    <a class="nav-link active" href="upgrade.html">
                                        <i class="nc-icon nc-alien-33"></i>
                                        <p>Upgrade to PRO</p>
                                    </a>
                                </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> View Rooms </a>
                    
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
                        <ul class="nav navbar-right navbar-nav ml-auto">
                           
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
            <!-- we will use php to show the tables with the query with one of these table structures-->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">View Current and Available Rooms Here!</h4>
                                    <p class="card-category">These are a list of rooms that are currently open for you to join. Select a room to Check-in!</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    
                                <?php
                                    require('../../controller/model/db_class.php');

                                    $viewRooms = new db_connection;
                                
                                    $viewRooms->read_rooms();

                                    echo "<table class='table table-hover table-striped'>
                                            <thead class='black white-text'>
                                                <th>Roomd ID</th>
                                                <th>Admin Name</th>
                                                <th>Room Name</th>
                                                <th>Lecture Hall</th>
                                                <th>Date</th>
                                                <th>Start Time</th>
                                                <th>End Time Time</th>
                                            </thead>";

                                    while($row = $viewRooms->db_fetch()){

                                        // $id = $_SESSION['user_id'];

                                        $r_id = $row['roomID'];
                                        $adminNme = $row['adminname'];
                                        $adminID = $row['adminID'];
                                        $r_name = $row["roomname"];
                                        $lhall = $row["lecturehall"];
                                        $r_date = $row['roomdate'];
                                        $strttime = $row['starttime'];
                                        $endtime = $row['endtime'];

                                        echo "
                                        <tbody>
                                            <tr>
                                                <th scope='row'>$r_id</th>
                                                <td>$adminNme</td>
                                                <td>$r_name</td>
                                                <td>$lhall</td>
                                                <td>$r_date</td>
                                                <td>$strttime</td>
                                                <td>$endtime</td>
                                                <td>
                                                <button class='btn btn-default btn-fill pull-right' name='createRoom'>
                                                    <a href='../../controller/viewroomControl.php?checkin=$r_id'> CHECK-IN </a>
                                                </button>
                                                </td>
                                            </tr>
                                        </tbody>";
                                    }

                                    echo "</table>";
                                    ?>
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
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts etc -->
<script src="../js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>


</html>