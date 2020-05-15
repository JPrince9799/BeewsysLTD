<?php

require('model/db_class.php');
require('session.php');


if($_SERVER["REQUEST_METHOD"] == "GET"){
		
    if(isset($_GET['checkin'])) {

        $id = $_GET['checkin'];
        $room_id = $_SESSION['roomID'];
        $room_name = $_SESSION['roomname'];
        $userName = $_SESSION['username'];
        $time = date("h:i a");

        echo "<script> alert($userName) </script>";

        $sql_checkin = "INSERT INTO `checkin` (`assignID`, `roomID`, `roomname`, `userID`, `username`, `time`) VALUES (NULL, '$room_id', '$room_name', '$id', '$userName', '$time');";

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
    if(isset($_GET['manageroom'])) {
        
        echo "<script> alert('$name');
                window.location.href ='../view/admin/manageroom.php'; </script>";


    }
    if(isset($_GET['deleteroom'])) {

        $id = $_GET['deleteroom'];

        $sql_delete = "DELETE FROM `rooms` WHERE `roomID` = '$id'";

        $deleteRoom = new db_connection;

        $result_delete = $deleteRoom->db_query($sql_delete);

        if($result_delete){
            echo "<script> alert('Room Deleted!') 
                    window.location.href ='../view/admin/viewroom.php';</script>";
        }
        else{
            echo "<script> alert('You cannot delete this room!') 
                    window.location.href ='../view/admin/viewroom.php';</script>";
        }

    }
}
?>