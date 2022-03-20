<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@kit.com'; #enter yur domin name here <<<
$email_subject = 'New From Submission';
$email_body = "User Name: $name. \n"
                "User Email: $visitor_email. \n"
                "Subject: $subject. \n"
                "User Message: $message. \n";

$to = 'whitehat905@gmail.com';

$headers = "From: $email from \r\n "

$headers .= "Replay to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>

