<?php 

require('..\model\db_class.php');

//variable to create an instance of the database
$db = new mysqli(DATABASE, USERNAME, PASSWORD, DB_NAME);

//this checks that the button has been clicked
if(isset($_POST['lgnbtn'])) {

    $email = $_POST['uemail'];

    $password = md5($_POST['upassword']);
   
    //this is a variable to hold the query that will run and fetch the users data.
    $loginUser = "SELECT `usermail`, `upassword` FROM `users` WHERE usermail='$email' AND upassword='$password'";
    // $loginUser = "SELECT Fullname, uName, email, u_password FROM users WHERE email LIKE '%$email%' AND u_password LIKE '%$pword%'";

    //variable to store the query response
    $result = $db->query($loginUser);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            //get the email of the user
            $lemail = $row['email'];
            //get the password
            $loginPassword = $row['u_password'];

            //compare the entered password with the database password
            if(
                $lemail == $email &&
                $loginPassword == md5($pword)
            ){

                //create a session for the user that logs in succefully
                $_SESSION['id'] = $row['u_id'];

                $_SESSION['email'] = $row['email'];

                $_SESSION['username'] = $row['uName'];

                $_SESSION['name'] = $row['Fullname'];

                $_SESSION['p_image'] = $row['user_img'];
                
                //direct the user to their dashboard
                header('Location: view/admin/dashboard.php');

            }
            else{

                //error message if one of the entered data is incorrect
                $error = "Email or Password Incorrect";

            }

        }

    }
}
?>