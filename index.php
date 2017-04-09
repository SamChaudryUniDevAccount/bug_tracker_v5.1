<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("dbconfig.php");

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // username and password sent from form

//    echo "unsecured username is {$_POST['username']} and password is {$_POST['password']}";


    $myusername = mysqli_real_escape_string($link,$_POST['username']);
    $mypassword = mysqli_real_escape_string($link,$_POST['password']);

    //   echo "username is {$myusername} and password is {$mypassword}";

    $sql = "SELECT * FROM user WHERE username = '$myusername' and passcode = '$mypassword'";
    if ($result = mysqli_query($link,$sql))
    {
        $count = mysqli_num_rows($result);
        echo $count;

    }
    else{
        echo "ERROR Something not working!";
    }
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active = $row['active'];


    if($count == 1) {

        //session_register("myusername");

        $_SESSION['login_user'] = $myusername;
        echo "count is 1";
        header('location: landing.php');

    }else {

        $error = "Your Login Name or Password is invalid";

    }
}
else{


    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <!-- CSS-->
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-grid.css">
        <link rel="stylesheet" href="Styles.css">
    </head>
    <!-- Body-->
    <body class="img-responsive" id = "login">
    <div class="container-fluid">
        <div id="loginModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class = "headerText "id="headerText modal-title">Welcome to Bug Tracker</h3>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="/" method="post">
                            <div class="container">
                                <label><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="username" required>

                                <label><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" required>
                                <button type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>
    <!-- JavaScript-->
    <script src="jQuery.js"></script>
    <script src="index.js"></script>
    <script src="bootstrap/bootstrap.js"></script>

    <?php
}
?>


