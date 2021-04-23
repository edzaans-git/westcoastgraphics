<?php

// THIS IS TEST SCIPT...........

function emptyInputSignup($name, $email, $username, $password, $passwordRepeat)
{
    $result;

    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $passwordRepeat)
{
    $result;
    if ($password !== $passwordRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function uidExists($conn, $username, $email)
{

    $sql = "SELECT * from users where userUid = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signup.php?error=statementFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ss', $username, $email);

    mysqli_stmt_execute($stmt);

    $result_data = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result_data)) {
        return $row;
    } else {
        $result = false;
    }
    return $result;

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $password)
{

    $sql = "INSERT INTO users (userName,userEmail,userUid,userPassword) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signup.php?error=statementFailed');
        exit();
    }
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $username, $hashedPwd);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header('location: ../signup.php?error=none');
}
