<?php
    session_start();
	

	
	include("db_connect.php");
	
	
	$query = "UPDATE `order`
	          SET                  `levertijd` = '".$_POST['levertijd']."'
			  WHERE                `idOrder` = '".$_POST['orderid']."'";


	$result = mysqli_query($connection, $query);
	var_dump($query);
	
	

	
		header("location:klanthome.php");
?>
