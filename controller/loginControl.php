<?php 

require('model/db_class.php');
require('session.php');

//variable to create an instance of the database
$db = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

if(isset($_POST['lgnbtn'])) {

    $email = $_POST['uemail'];

    $password = $_POST['upassword'];
    
    //this is a variable to hold the query that will run and fetch the users data.
    $loginAdmin = "SELECT * FROM `administrator` WHERE `adminEmail` = '$email' AND `adminPassword` = '$password'";
    $loginUser = "SELECT * FROM `users` WHERE `usermail` = '$email' AND `upassword` = '$password'";

    //variable to store the query response
    $result_admin = $db->query($loginAdmin);
    $result_user = $db->query($loginUser);

    if($result_admin->num_rows > 0){

        while($row = $result_admin->fetch_assoc()){
            //get the email of the user
            $u_email = $row['adminEmail'];
            
            //get the password
            $loginPassword = $row['adminPassword'];

            //compare the entered password with the database password
            if(
                $email == $u_email &&
                md5($loginPassword) == md5($password)
            ){

                //create a session for the user that logs in succefully
                $_SESSION['admin_id'] = $row['adminID'];

                $_SESSION['name'] = $row['adminame'];

                $_SESSION['course'] = $row['crsename'];

                $_SESSION['email'] = $row['adminEmail'];
                
                //direct the user to their dashboard
                header('Location: ../view/admin/dashboard.php');

            }
            else{
                echo "<script> 
                    alert('Invalid Username or Password!');
                    window.location.href ='../index.php';
                    </script>";

            }

        }

    }
    else if($result_user->num_rows > 0){

        while($row = $result_user->fetch_assoc()){
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
                $_SESSION['user_id'] = $row['userID'];

                $_SESSION['username'] = $row['username'];

                $_SESSION['email'] = $row['usermail'];
                
                //direct the user to their dashboard
                header('Location: ../view/user/dashboard.php');

            }
            else{
                echo "<script> 
                    alert('Invalid Username or Password!');
                    window.location.href ='../index.php';
                    </script>";

            }

        }

    }
    else{
        echo "<script> 
            alert('Invalid Username or Password!');
            window.location.href ='../index.php';
            </script>";
    }

}

?>