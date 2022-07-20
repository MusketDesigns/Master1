<?php

if (isset($_POST['submit'])) {
    $visitor_name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $email_subject = $_POST['subject'];
    $visitor_service = $_POST['services'];
    $visitor_message = $_POST['message'];


$mailTo = "srheeder.musket@gmail.com";
$headers = "From: ".$visitor_email;
$txt = "You have received an email form ".$visitor_name.".\n\n".$visitor_message;

mail($mailTo, $email_subject,$visitor_phone,$visitor_email,$visitor_service,$txt,$headers);
header("Locations: index.php?mailsend");


}



?>
