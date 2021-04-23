
<?php
// Create connection function
function connect_db()
{

    $server = 'localhost';
    $username = 'newuser';
    $password = 'password';
    $dbname = 'ppit_test';

    $conn = mysqli_connect($server, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed!!!");
    }
    return $conn;
}

//connect_db();

?>
