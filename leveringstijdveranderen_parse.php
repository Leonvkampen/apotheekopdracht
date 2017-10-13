<?php
    session_start();
	

	
	include("db_connect.php");

	
	$query = "UPDATE order
	          SET                  `leverdatum` = '".$_GET['leverdatum']."'"; 



	$result = mysqli_query($connection, $query);

	
		//header("location:leveringstijdveranderen_parse.php");
?>
