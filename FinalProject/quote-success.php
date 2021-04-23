
<?php

include 'functions/connect_db.php';

$conn = connect_db();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['myselectbox'];
$date = $_POST['date'];

$insert = "INSERT INTO customer(customer_id,name,email,phone) 
VALUES(LAST_INSERT_ID(),'$name','$email','$phone');";

$insert .= "INSERT INTO service(service_id,type,date,customer_id) 
VALUES (LAST_INSERT_ID(),'$service','$date',LAST_INSERT_ID());";

// Check if variables were posted, throw a message YES or NO
if ($conn->multi_query($insert) === TRUE) {
    echo 'Booking successfull
                  You will be redirected to main page';
    '<img src="img/car1.jpg" class="img-fluid" alt="Banner"';


    header("Refresh:3; index.php", true, 303); // HTTP request delay can be set here
} else {
    echo "Error: " . $insert . "<br>" . $conn->error;
}

mysqli_close($conn);
