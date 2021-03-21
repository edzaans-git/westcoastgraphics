<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    // Include functions here
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // Error handling code here
    if(emptyInputSignup($name,$email,$username,$password,$passwordRepeat) !== false) {
        header('location: ../signup.php?error=emptyInput');
        exit();
    }
    if(invalidUid($username) !== false) {
        header('location: ../signup.php?error=invalidUid');
        exit();
    }
    if(invalidEmail($email) !== false) {
        header('location: ../signup.php?error=invalidEmail');
        exit();
    }
    if(passwordMatch($password,$passwordRepeat) !== false) {
        header('location: ../signup.php?error=passwordNoMatch');
        exit();
    }
    if(uidExists($conn,$username,$email) !== false) {
        header('location: ../signup.php?error=usernameTaken');
        exit();
    }

    if(createUser($conn,$name,$email,$username,$password)) { 
        echo "Success";
    }

}else {
    header('location: ../signup.php');
    exit();
}
