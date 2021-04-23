<?php
session_start();
session_destroy();
if (isset($_COOKIE['user_email']) or isset($_COOKIE['username'])) {

    //$username = $_COOKIE['username'];
    //setcookie('email',$email,time()-1); 
    setcookie('user_email', $_POST['email'], time() - 1); // Set COOKIE time to past to delete COOKIE
}

header("Refresh:3; index.php", true, 303); // HTTP request delay can be set here
echo "You have logged out.You will be redirected to home page";
