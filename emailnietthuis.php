
<?php

session_start();

include 'db_connect.php';


$to      = $_GET['email'];
$subject = 'U was niet thuis';
$message = 'U was niet thuis en daardoor is uw order vervallen.';
$headers = 'From: djlopa1@gmail.com' . "\r\n" .
    'Reply-To: djlopa1@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

$deleteorderregel = "DELETE FROM `orderregel`
				WHERE `orderid` = '".$_GET['orderid']."'";

$resultorderregel = mysqli_query($connection, $deleteorderregel);

$deleteorder = "DELETE FROM `order`
				WHERE `idOrder` = '".$_GET['orderid']."'";

$resultorder = mysqli_query($connection, $deleteorder);

var_dump($deleteorder);
var_dump($deleteorderregel);

header('Location: leveringen.php');
?>



