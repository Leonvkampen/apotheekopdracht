<?php


$to      = 'apotheker@gmail.com,Jaapie@gmail.com';
$subject = 'Commentaar klant';
$message = $_POST["commentaar"];
$headers = 'From: koerier@gmail.com' . "\r\n" .
    'Reply-To: djlopa1@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>