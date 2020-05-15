<?php

require('model/db_class.php');
require('session.php');


if($_SERVER["REQUEST_METHOD"] == "GET"){
		
    if(isset($_GET['present'])) {

    }
    if(isset($_GET['absent'])) {

    }
    if(isset($_GET['manageRoom'])){

        $roomName = $_GET['manageroom'];


        header('Location: ../view/admin/manageroom.php?manageroom=$roomName');

    }
}
?>