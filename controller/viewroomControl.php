<?php

require('model/db_class.php');
require('session.php');


if($_SERVER["REQUEST_METHOD"] == "GET"){
		
    if(isset($_GET['checkin'])) {

        $roomID = $_GET['checkin'];
        $time = time();
        // $time = date("h:i a");
        $roomCheck = new db_connection;
        $roomCheck->read_rooms("roomID='$roomID'");
        $row = $roomCheck->db_fetch();
        $admin_id = $row['adminID'];
        $room_name = $row['roomname'];
        $user_id = $_SESSION['user_id'];
        $userName = $_SESSION['username'];
        
        $sql_checkin = "INSERT INTO `checkin` (`assignID`, `adminID`, `roomID`, `roomname`, `userID`, `username`, `time`) VALUES (NULL, '$admin_id', '$roomID', '$room_name', '$user_id', '$userName', '$time');";

        $checkin = new db_connection;

        $result_checkin = $checkin->db_query($sql_checkin);
        
        if($result_checkin){
            echo "<script> alert('Checked In!');
                window.location.href ='../view/user/notifications.php'; </script>";
        }
        else{
            echo "<script> alert('Checked In Failed! Check with your administrator.');
                window.location.href ='../view/user/viewroom.php'; </script>";
        }
        
    }
    // if(isset($_GET['manageroom'])) {
        
    //     echo "<script> alert('$name');
    //             window.location.href ='../view/admin/manageroom.php'; </script>";


    // }
    if(isset($_GET['deleteroom'])) {

        $id = $_GET['deleteroom'];

        $sql_delete = "DELETE FROM `rooms` WHERE `roomID` = '$id'";

        $deleteRoom = new db_connection;

        $result_delete = $deleteRoom->db_query($sql_delete);

        if($result_delete){
            echo "
            <script> window.location.href ='../view/admin/viewroom.php'; </script>";
        }
        else{
            echo "<script> alert('You cannot delete this room!') 
                    window.location.href ='../view/admin/viewroom.php';</script>";
        }

    }
}
?>