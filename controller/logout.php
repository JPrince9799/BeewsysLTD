<?php

ob_start();

//start session
session_start();

// unset login session variables
$_SESSION["id"] = null;
$_SESSION["username"] = null;
$_SESSION["email"] = null;

// destroy login the session 
session_destroy();

//redirect to login
header("Location: ../index.php");


?>