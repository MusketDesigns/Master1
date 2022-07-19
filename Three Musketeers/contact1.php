<?php
$visitor_name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$email_subject = $_POST['subject'];
$visitor_service = $_POST['services'];
$visitor_message = $_POST['message'];

$email_from = 'musketdesigns@gmail.com';
$email_subject = "New Form Submission";
$email_body = "User Name: $visitor_name.\n".
                "User Email: $visitor_email.\n".
                "User Phone: $visitor_phone.\n".
                "Service: $visitor_service.\n".
                "Message: $visitor_message.\n".

$to = "srheeder.musket@gmail.com";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body.$headers);

header("Location: index.html");



?>