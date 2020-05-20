<?php

require('model/db_class.php');
require('session.php');


if($_SERVER["REQUEST_METHOD"] == "GET"){
		
    if(isset($_GET['present'])) {

        $roomID = $_GET['present'];
        $date = date("Y/m/d");
        $time = date("h:i a");
        $roomCheck = new db_connection;
        $userCheck = new db_connection;
        $roomCheck->read_rooms("roomID='$roomID'");
        $userCheck->read_checkins("roomID='$roomID'");
        $row_roomcheck = $roomCheck->db_fetch();
        $row_usercheck = $userCheck->db_fetch();
        $admiName = $row_roomcheck['adminname'];
        $room_name = $row_roomcheck['roomname'];
        $user_id = $row_usercheck['userID'];
        $userName = $row_usercheck['username'];

        $sql_present = "INSERT INTO `checkin_youcheckedin` (`reportID`, `userID`, `username`, `roomname`, `adminname`, `date`, `time`) VALUES (NULL, '$user_id', '$userName', '$room_name', '$admiName', '$date', '$time')";

        $present = new db_connection;

        $result_present = $present->db_query($sql_present);
        
        if($result_present){
            echo "window.location.href ='../view/admin/viewroom.php?manageroom=".$roomID."; </script>";
        }
        else{
            echo "<script> alert('An error occured!');
                window.location.href ='../view/admin/viewroom.php'; </script>";
        }
    }
    if(isset($_GET['absent'])) {

    }
    if(isset($_GET['manageRoom'])){

        $roomName = $_GET['manageroom'];


        header('Location: ../view/admin/manageroom.php?manageroom=$roomName');

    }
}
?>