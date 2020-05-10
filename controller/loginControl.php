<?php 

require("..\model\credentialClass.php");

//this checks that the button has been clicked
if(isset($_POST['lgnbtn'])) {

    $email = sanitizeData($_POST['uemail']);

    // $password = sanitizeData(md5($_POST['upassword']));

    $password = sanitizeData($_POST['upassword']);
    
    $verif_login = new registerAuthenticate;

    $verif_login->queryLogin($username, $password);

    $result = loginVerify($email, $password);

    if($result){
        header("Location: view/admin/dashboard.php");          
    }
    else{
        echo "Login Unsuccessful";
    }

}



function loginVerify($username, $password){

;

}

?>