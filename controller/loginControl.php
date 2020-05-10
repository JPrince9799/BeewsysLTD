<?php 

require('../model/db_class.php');


//variable to create an instance of the database
$db = new db_connection;

//this checks that the button has been clicked
if(isset($_POST['lgnbtn'])) {

    $email = $_POST['uemail'];

    $password = $_POST['upassword'];
   
    //this is a variable to hold the query that will run and fetch the users data.
    $loginUser = "SELECT * FROM `users` WHERE usermail='$email' AND upassword='$password'";
    // $loginUser = "SELECT Fullname, uName, email, u_password FROM users WHERE email LIKE '%$email%' AND u_password LIKE '%$pword%'";

    //variable to store the query response
    $result = $db->db_query($loginUser);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            //get the email of the user
            $u_email = $row['usermail'];
            //get the password
            $loginPassword = $row['upassword'];

            //compare the entered password with the database password
            if(
                $lemail == $email &&
                md5($loginPassword) == md5($password)
            ){

                //create a session for the user that logs in succefully
                $_SESSION['id'] = $row['u_id'];

                $_SESSION['username'] = $row['username'];

                $_SESSION['email'] = $row['usermail'];
                
                //direct the user to their dashboard
                header('Location: view/admin/dashboard.php');

            }
            else{

                //error message if one of the entered data is incorrect
                echo "Email or Password Incorrect";

            }

        }

    }
}
?>