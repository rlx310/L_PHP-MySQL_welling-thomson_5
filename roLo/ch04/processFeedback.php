<?php

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$toAddress = "feedback@example.com";
$subject = "Feedback form web site";

$mailContent = "Customer name: ".filter_var($name)."\n"
              ."Customer email: ".$email."\n"
              ."Customer comments:\n".$feedback."\n";

$fromAddress = "From: webserver@example.com";

mail($toAddress, $subject, $mailContent, $fromAddress);

//echo $toAddress." ".$subject." ".$mailContent." ".$fromAddress;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
    <h1>Feedback submitted</h1>
    <p>Your feedback has been sent.</p>
</body>
</html>
