<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

$toAddress = "feedback@example.com";
$subject = "Feedback from web site";

$mailContent = "Customer name: ".str_replace("\r\n", "", $name)."\n"
              ."Customer email: ".str_replace("\r\n", "", $email)."\n"
              ."Customer comments:\n".str_replace("\r\n", "", $feedback)."\n";

$fromAddress = "From: webserver@example.com";

mail("rolandolopez3442@yahoo.com", $subject, $mailContent, $fromAddress);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
    <h1>Feedback submitted</h1>
    <p>Your feedback (show below) has been sent.</p>
    <p><?php echo nl2br(htmlspecialchars($feedback)); ?> </p>
</body>
</html>
