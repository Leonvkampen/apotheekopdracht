<?php

$to      = $_GET['email'];
$subject = 'U was niet thuis';
$message = 'U was niet thuis en daardoor is uw order vervallen.';
$headers = 'From: koerier@gmail.com' . "\r\n" .
    'Reply-To: apotheker@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>