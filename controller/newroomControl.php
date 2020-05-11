<?php

if(isset($_POST['newroom'])){

    $roomName = $_POST['roomName'];
    $lectureHall = $_POST['LHall'];
    $roomCapacity = $_POST['roomCapacity'];
    $date = $_POST['date'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];

    $createRoom = "INSERT INTO `rooms` (adminID, roomname, lecturehall, roomcapacity, roomdate, starttime, endtime) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    echo "$roomCapacity";
    echo "$lectureHall";
    echo "$roomName";
    echo "$date";
    echo "$startTime";
    echo "$endTime";

}

?>