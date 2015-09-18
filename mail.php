<?php
if(isset($_POST['customerName'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "bob@triaquacleaning.co.uk".",";
    $email_subject =$_POST['subject'];

    $first_name = $_POST['customerName']."\r\n"; // required
    $email_from = $_POST['customerEmail']."\r\n"; // required
    $comments =$_POST['enquiry']."\r\n";
    $comments .= "\r\n".$_POST['message']; // required
    $email_message = $comments;
//    //$options = $_POST['userSubject'];
//echo $email_subject;
//echo $email_message;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'To: Bob <bob@triaquacleaning.co.uk>, Bright <bridark17@hotmail.com>' . "\r\n";
    $headers .= 'From:enquiries@tri-aquacleaning.co.uk'. "\r\n";

$mail_sent = mail($email_to, $email_subject, $email_message, $headers);
if(!$mail_sent){
    echo 'false';
}else{
    echo 'true';
}
}else{
    echo "error";
}

