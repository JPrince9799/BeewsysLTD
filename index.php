<?php

//checks to find out if the request methods if GET
if($_SERVER["REQUEST_METHOD"] == "POST"){

	//this checks that the button has been clicked
    if(isset($_POST['lgnbtn'])) {

        $email = $_POST['uemail'];

        $password = md5($_POST['upassword']);

        echo "\n You have successfully logged in!";

    }

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
    
<<<<<<< HEAD
        <form class="form-group col-md-4 mx-auto align-middle" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
=======
           <form class="form-group col-md-4 mx-auto align-middle" action="" method="Post" id="login_form ">
>>>>>>> 53d2e437cebdcd5affbc4f8ed22d0ae814bfe9a5
               <div class="text-left">
               <img class="mb-6 " src="view/images/ashesi.png" alt="logo" width="30%">
            </div>
            <div class="form-group">
                <label class="a text-left" for="exampleInputEmail1">Email address</label>
<<<<<<< HEAD
                <input type="email" name="uemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="*Enter email">
                <!-- <small class="a" id="emailHelp">*Enter Email</small> -->
            </div>
            <div class="form-group">
                <label class="a"  for="exampleInputPassword1">Password</label>
                <input type="password" name="upassword" class="form-control" id="exampleInputPassword1" placeholder="*Enter password">
                 <br><a class="a">Forgot Password?</a>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-outline-light" name="lgnbtn">Login</button></div><hr>
=======
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small class="a" id="emailHelp">*Enter Ashesi Email</small>
            </div>
            <div class="form-group">
                <label class="a"  for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                 <a class="a">Forgot Password?</a>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-outline-light">Submit</button></div><hr>
>>>>>>> 53d2e437cebdcd5affbc4f8ed22d0ae814bfe9a5
            <div class="text-center">
    
            <img class="mb-4 " src="view/images/logo_dark.png" alt="logo" width="20%"></div>
        </form>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>