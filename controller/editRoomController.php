
<?php

require('model/db_class.php');
require('session.php');

if(isset($_POST['editRoom'])){
    $adminID = $_SESSION['admin_id'];
    $adminName = $_SESSION['name'];
    $currentroom = $_POST['oldRoom']
    $roomName = $_POST['roomName'];
    $lectureHall = $_POST['LHall'];
    $roomCapacity = $_POST['roomCapacity'];
    $rdate = $_POST['roomdate'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    
    $db = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    //sql query to insert the new room
    $createRoom = "INSERT INTO `rooms` (`roomID`, `adminID`, `adminname`, `roomname`, `lecturehall`, `roomcapacity`, `roomdate`, `starttime`, `endtime`) 
    VALUES (NULL, '$adminID', '$adminName', '$roomName', '$lectureHall', '$roomCapacity', '$rdate', '$startTime', '$endTime');";
    //sql query to ensure that the entered
    $maxCapacity = "SELECT `roomcapacity` FROM `lecturehalls` WHERE `lecturehall`='$lectureHall'";
    
    

    if($roomName!="" && $lectureHall!="" && $roomCapacity!="" && $rdate!="" && $startTime!="" && $endTime!=""){
        $result_room = $db->query($createRoom);
        if($result_room){
            echo "<script> 
                    alert('Room created!');
                    window.location.href ='../view/admin/newroom.php';
                    </script>";
        }
        else{
            echo "<script> 
                    alert('Room has not been created!');
                    window.location.href ='../view/admin/newroom.php';
                    </script>";
        }
    }
    else{
        echo "<script> 
                    alert('Please make sure you have filled all the boxes!');
                    window.location.href ='../view/admin/newroom.php';
                    </script>";
    }

}

?>