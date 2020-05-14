<?php
$name = $_POST['name'];
$visitor_email = $_POST['mail'];
$message = $_POST['message'];

$email_from = 'info@kimlitjens.nl';

$email_subject = "New Form Submission";

$email_body = "User name: $name.\n" .
    "User Email: $visitor_email.\n" .
    "User Message: $message.\n";

$to = "itisme@kimlitjens.nl";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");
