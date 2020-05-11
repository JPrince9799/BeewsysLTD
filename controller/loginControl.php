<?php 

require('model/db_class.php');
require('session.php');

//variable to create an instance of the database
$db = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

if(isset($_POST['lgnbtn'])) {

    $email = $_POST['uemail'];

    $password = $_POST['upassword'];
    
    //this is a variable to hold the query that will run and fetch the users data.
    $loginUser = "SELECT * FROM `users` WHERE `usermail`='$email' AND `upassword`='$password'";

    //variable to store the query response
    $result = $db->query($loginUser);

    print_r($result);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            //get the email of the user
            $u_email = $row['usermail'];
            
            //get the password
            $loginPassword = $row['upassword'];

            //compare the entered password with the database password
            if(
                $email == $u_email &&
                md5($loginPassword) == md5($password)
            ){

                //create a session for the user that logs in succefully
                $_SESSION['id'] = $row['userID'];

                $_SESSION['username'] = $row['username'];

                $_SESSION['email'] = $row['usermail'];
                
                //direct the user to their dashboard
                header('Location: ../view/admin/dashboard.php');

            }
            else{

                //error message if one of the entered data is incorrect
                header('Location: ../index.php');

            }

        }

    }

}

?>