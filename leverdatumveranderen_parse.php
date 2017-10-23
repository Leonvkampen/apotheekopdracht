<?php
    session_start();
	
    var_dump($_POST["leverdatum"]);
	
	include("db_connect.php");
	
	
	$query = "UPDATE `order`
	          SET                  `leverdatum` = '".$_POST['leverdatum']."'
			  WHERE                `idOrder` = '".$_POST['orderid']."'";


	$result = mysqli_query($connection, $query);
	var_dump($query);
	
	


	
		header("location:klanthome.php");
?>
