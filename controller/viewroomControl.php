<?php

require('model/db_class.php');


if($_SERVER["REQUEST_METHOD"] == "GET"){
		
    if(isset($_GET['checkin'])) {
        
        echo "<script> alert('$name');
                window.location.href ='../view/user/notifications.php'; </script>";


    }
    if(isset($_GET['deleteroom'])) {

        $id = $_GET['deleteroom'];

        $sql = "DELETE FROM `rooms` WHERE `roomID` = '$id'";

        $deleteRoom = new db_connection;

        $result = $deleteRoom->db_query($sql);

        if($result){
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