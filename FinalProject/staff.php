<?php
session_start();

include 'functions/connect_db.php';

$conn = connect_db();

$susername = $_POST['sname'];
$spassword = $_POST['spassword'];
$_SESSION['staffname'] = $susername;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery.shop.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <title>West Coast Graphics</title>
</head>

<body>

    <?php
    include 'nav.php';


    // Check to see if all information was sent correct
    if (trim($susername) == "newuser" && $spassword == "password" or $dbuser == "root" && $dbpassword == "") {
        // 1. Create a database connection
        if (!$conn) {
            die("Could not connect to database,check your credentials : " . mysqli_error());
        }
        // Display message if connected to database
        //echo '<div class="staffGreeting mx-auto">
        // <h1>You are logged in as ' . $_SESSION['staffname'] . '</h1>
        //<p>Current bookings are displayed below </p>
        //</div>';
    } else {
        echo '<div class="bookingGreet mx-auto"><p>Check your credentials and try again</p></div>';
        header("Refresh:3; login.php", true, 303);
    }


    // MySQL query to JOIN 2 tables and display data
    $show = "SELECT customer.customer_id,customer.name,customer.email,customer.phone,
    service.service_id,service.type,service.date
    FROM customer
    JOIN service ON customer.customer_id = service.service_id
    ORDER BY customer.customer_id ASC";


    $result = mysqli_query($conn, $show);

    echo "
    <table border='1' class='greetingTable mx-auto mt-5'>
        <tr>
            <th colspan='6'>
                <p class='text-center'>Current bookings are displayed below</p>
                
            <th/>
        </tr>
    <tr>
			<th>Customer Number</th>
            <th> Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Service Type</th>
            <th>Requested Date</th>
              
    </tr>";

    // 3. Return data
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td id='id'>" . $row['customer_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";



    // 3. Relese returned data
    mysqli_free_result($result);

    mysqli_close($conn);

    ?>

    <?php
    include 'footer.php';
    ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>