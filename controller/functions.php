<?php 

require("../model/credentialClass.php");

function sanitizeData($input) {
	
    $data = trim($input);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

}

function loginVerify($username, $password){

    $verif_login = new registerAuthenticate();

    print_r($verif_login->queryLogin($username, $password));

}

?>