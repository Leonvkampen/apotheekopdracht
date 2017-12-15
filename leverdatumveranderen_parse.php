<?php
    session_start();
	
    
	
	include("db_connect.php");
	
	
	$query = "UPDATE `order`
	          SET                  `leverdatum` = '".$_POST['leverdatum']."'
			  WHERE                `idOrder` = '".$_POST['orderid']."'";


	$result = mysqli_query($connection, $query);
	
	
	


	
		header("location:klanthome.php");
?>
