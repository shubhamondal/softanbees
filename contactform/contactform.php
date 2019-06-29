<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "mondal.shubha@gmail.com";
$to = "shubha.mondal@medibuddy.in";
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "The email message was sent.";
?>