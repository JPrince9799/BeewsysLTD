<?php

require('controller/session.php');

//first check if there is an active session
if(isset($_SESSION['id'])){
	//if a session is created redirect them to the dashboard
    header('Location: view/admin/dashboard.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>YouCheckedIn</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="view/css/style.css">
    </head>
       <body >
           <!-- Form For Login -->
    

        <form class="form-group col-md-4 mx-auto align-middle" id="login_form " action="controller/loginControl.php" method="POST">

               <div class="text-left">
               <img class="mb-6 " src="view/images/ashesi.png" alt="logo" width="30%">
            </div>
            <div class="form-group">
                <label class="a text-left" for="exampleInputEmail1">Email address</label>

                <input type="email" name="uemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="*Enter email">
                
            </div>
            <div class="form-group">
                <label class="a"  for="exampleInputPassword1">Password</label>
                <input type="password" name="upassword" class="form-control" id="exampleInputPassword1" placeholder="*Enter password">
                 <br><a class="a">Forgot Password?</a>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-outline-light" name="lgnbtn">Login</button></div><hr>

            <div class="text-center">
    
            <img class="mb-4 " src="view/images/logo_dark.png" alt="logo" width="20%"></div>
        </form>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>