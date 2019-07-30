<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from =  $_POST['email'];
$to = "contact@softanbees.com";
$subject = $_POST['subject'];
$htmlContent = '
<html>
    <head>
        <title>softanbees enquiry</title>
    </head>
    <body>
        <h1>Hi team, We have got one student registration</h1>
        <h3>Please take this on priority</h3>
        <table cellspacing="0" style="border: 2px solid #000; width: 100%; height: 50%;">
            <tr>
                <th>Name:</th><td>'. strip_tags($_POST['name']) .'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email:</th><td><a href="mailto:'. strip_tags($_POST['email']) .'">'. strip_tags($_POST['email']) .'</a></td>
            </tr>
            <tr>
                <th>Collage Name:</th><td>'. strip_tags($_POST['collage']) .'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Course Name:</th><td>'. strip_tags($_POST['coursename']) .'</td>
            </tr>
             <tr>
                <th>Collage Name:</th><td>'. strip_tags($_POST['mobileno']) .'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Course Name:</th><td>'. strip_tags($_POST['subject']) .'</td>
            </tr>
            <tr>
                <th>Subject:</th><td>'. strip_tags($_POST['message']) .'</td>
            </tr>
        </table>
    </body>
    </html>';
$headers = "From:" . $from;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
;
if(mail($to,$subject,$htmlContent, $headers)) {
        // Your browser message to them
        $feedback = 'your information has been successfully Send it';
        $headerRep  = "From: softanbees.com <contact@softanbees.com>";
        $subjectRep =   "softanbees registration response";
        $messageRep =   "Hi ". strip_tags($_POST['name']) .", \r\nYou have been registered successfully,our team will get back to you very sortly. \r\n \r\n Thanks & Regards\r\n Team softanbees";
        mail($from, $subjectRep, $messageRep, $headerRep);
    }

echo "OK";
?>