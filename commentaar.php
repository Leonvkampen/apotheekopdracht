<?php
session_start();


include 'db_connect.php';

$to      = 'apotheker@gmail.com,Jaapie@gmail.com';
$subject = 'Commentaar van een klant';
$message = 'Beste Huisarts/Apotheker. Er is een commentaar ontvangen van een klant
Klant: '.$_POST["naam"].'
Bericht: '.$_POST["commentaar"].'
orderid: '.$_POST['idOrder'].'';
$headers = 'From: koerier@gmail.com' . "\r\n" .
    'Reply-To: djlopa1@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

$query = "UPDATE `order`
                                SET                 `commentaar` = '".$_POST['commentaar']."'
                                WHERE               `idOrder` = '".$_POST['idOrder']."'";
			  
	
mysqli_query($connection, $query);

echo "Uw commentaar is verstuurd";
header("refresh:4; url=leveringen.php");
?>
