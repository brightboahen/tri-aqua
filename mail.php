<?php
if(isset($_POST['customerName'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "bridark17@hotmail.com";
    $email_subject = $_POST['subject'];

    $first_name = $_POST['customerName']; // required
    $email_from = $_POST['customerEmail']; // required
    $comments = $_POST['message']; // required
    $comments .= $_POST['enquiry'];
    $email_message = $comments;
    //$options = $_POST['userSubject'];

//echo $email_message;

$headers = "From:mail.delivery@tri-aquacleaning.co.uk\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";

$mail_sent = mail($email_to, $email_subject, $email_message, $headers);

}

