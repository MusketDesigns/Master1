<?php
  
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_phone = "";
    $email_subject = "";
    $visitor_service = "";
    $visitor_message = "";
    $email_body = "<div>";
      
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }
 
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
      
    if(isset($_POST['visitor_phone'])) {
        $visitor_phone = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_phone']);
        $visitor_phone = filter_var($visitor_phone, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
    
    if(isset($_POST['email_subject'])) {
        $email_subject = filter_var($_POST['email_subject'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_subject."</span>
                        </div>";
    }
      
    if(isset($_POST['visitor_service'])) {
        $visitor_service = filter_var($_POST['visitor_service'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Concerned Department:</b></label>&nbsp;<span>".$visitor_service."</span>
                        </div>";
    }
      
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
    }
      
    if($visitor_service == "Portfolio Sites") {
        $recipient = "musketdesigns@gmail.com";
    }
    else if($visitor_service == "Resume's") {
        $recipient = "musketdesigns@gmail.com";
    }
    else if($visitor_service == "Business Sites") {
        $recipient = "musketdesigns@gmail.com";
    }
    else {
        $recipient = "musketdesigns@gmail.com";
    }
      
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
      
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
?>