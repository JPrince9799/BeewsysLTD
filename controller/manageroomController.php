<?php

require('model/db_class.php');
require('session.php');


if($_SERVER["REQUEST_METHOD"] == "GET"){
		
    if(isset($_GET['present'])) {

        $roomID = $_GET['present'];
        $date = date("Y/m/d");
        $time = date("h:i a");
        $roomCheck = new db_connection;
        $roomCheck->read_rooms("roomID='$roomID'");
        $row = $roomCheck->db_fetch();
        $admiName = $row['adminname'];
        $room_name = $row['roomname'];
        $user_id = $_GET[''];
        $userName = $_SESSION['username'];

        $sql_present = "INSERT INTO `checkin` (`reportID`, `userID`, `username`, `roomname`, `adminname`, `date`, `time`) VALUES (NULL, '$user_id', '$userName', '$room_name', '$admiName', '$date', '$time')";

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