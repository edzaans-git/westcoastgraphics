<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Below</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>

<body>

    <div class="header">
        <a href="/">West Coast Graphics</a>
    </div>



    <h1>Staff Login</h1>

    <form action="staff.php" method="POST">

        <p>Staff login</p>

        <input type="text" placeholder="Username" name="sname">
        <input type="password" placeholder="Password" name="spassword">


        <input type="submit">

    </form>

</body>

</html>