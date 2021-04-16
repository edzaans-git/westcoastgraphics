<?php
header("Location: https://westcoastgraphics.000webhostapp.com/welcome.php");

//create Variables to store form data
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$message = $_POST["message"];
$email = $_POST["email"];

/*
echo $fname;
echo '<br>';
echo $lname;
echo '<br>';
echo $email;
echo '<br>';
echo $message;
echo '<br>';
echo $number;
*/


//compose email
$to = "edzaans@hotmail.com"; // add working email when website is hosted
$subject = "Enquiry from WestCoastGraphics House contact form";
$message = "You have received a new email from : $fname
Message: $message";
$headers = "From" . $email;

//send email
mail($to, $subject, $message, $headers);
